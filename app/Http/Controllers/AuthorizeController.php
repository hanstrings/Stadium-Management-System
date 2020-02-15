<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Ticket;
use Session;
use Auth;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class AuthorizeController extends Controller
{
    //

    public function chargerCreditCard(Request $request)
    {
        
        
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(config('services.authorize.login'));
        $merchantAuthentication->setTransactionKey(config('services.authorize.key'));

        $refId = 'ref' . time();
        define("AUTHORIZENET_LOG_FILE", "phplog");
        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($request->input('cnumber'));
        $creditCard->setExpirationDate($request->input('card_expiry_year').'-'.$request->input('card_expiry_month'));
        $creditCard->setCardCode("123");
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        $order = new AnetAPI\OrderType();
        $order->setInvoiceNumber(str_random(7));
        $order->setDescription('Match no = '.$request->input('match_id').' Section Name='.$request->input('sec_name').' Price='.$request->input('total_price').' User='.Auth::user()->name);


        // Set the customer's Bill To address
        $customerAddress = new AnetAPI\CustomerAddressType();
        $customerAddress->setFirstName(Auth::user()->name);

        // Set the customer's identifying information
        $customerData = new AnetAPI\CustomerDataType();
        $customerData->setType("individual");
        $customerData->setId(Auth::user()->id);
        $customerData->setEmail(Auth::user()->email);

        

        //create a transaction
        $amount=$request->input('total_price');
        $quantity=$request->input('quantity');
        $match_id=$request->input('match_id');
        $sec_id=$request->input('sec_id');

        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType( "authCaptureTransaction");
        $transactionRequestType->setAmount($amount);
        $transactionRequestType->setOrder($order);
        $transactionRequestType->setPayment($paymentOne);
        $transactionRequestType->setBillTo($customerAddress);
        $transactionRequestType->setCustomer($customerData);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId( $refId);
        $request->setTransactionRequest($transactionRequestType);

        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
        //dd($response);

        /* for ($i=0; $i < $request->input('quantity'); $i++) { 
          $ticket = new Ticket;
          $ticket->match_id = $request->input('match_id');
          $ticket->user_id = Auth::user()->id;
          $ticket->section_id = $request->input('sec_id');	
          $ticket->created_at= Carbon::now()->format('Y-m-d H:i:s');
          $ticket->save();
        } */
        if ($response != null) {
          
          // Check to see if the API request was successfully received and acted upon
          if ($response->getMessages()->getResultCode() == "Ok") {
              // Since the API request was successful, look for a transaction response
              // and parse it to display the results of authorizing the card
              $tresponse = $response->getTransactionResponse();
          
              if ($tresponse != null && $tresponse->getMessages() != null) {

                
                /* Session::flash('flash_message','Your ticket is successfully reserved.');
                return redirect('dashboardd'); */
                /* echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "\n";
                echo " Transaction Response Code: " . $tresponse->getResponseCode() . "\n";
                echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "\n";
                echo " Auth Code: " . $tresponse->getAuthCode() . "\n";
                echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "\n"; */
                return view('pages.successTrans')->with('amount',$amount)->with('quantity',$quantity)->with('match_id',$match_id)->with('sec_id',$sec_id);
                //return view('pages.successTrans')->with('tresponse'.$tresponse);

              } else {
                  echo "Transaction Failed \n";
                  if ($tresponse->getErrors() != null) {
                      echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                      echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
                  }
              }
              // Or, print errors if the API request wasn't successful
          } else {
              echo "Transaction Failed \n";
              $tresponse = $response->getTransactionResponse();
          
              if ($tresponse != null && $tresponse->getErrors() != null) {
                  echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                  echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
              } else {
                  echo " Error Code  : " . $response->getMessages()->getMessage()[0]->getCode() . "\n";
                  echo " Error Message : " . $response->getMessages()->getMessage()[0]->getText() . "\n";
              }
          }
      }
            else
            {
              echo  "Charge Credit Card Null response returned";
            }
            //return redirect('/home');


    }
}