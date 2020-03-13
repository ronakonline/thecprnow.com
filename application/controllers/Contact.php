<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $data['title']='Contact || Welcome to CPR NOW';
        $data['view_page']='Contact';
        $this->load->view('contact-us',$data);
    }

    public function submitform(){
        $this->load->helper('form');
        $data = $this->input->post();
        print_r($data);
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'business15.web-hosting.com',
            'smtp_port' => 587,
            'smtp_user' => 'webmaster@creativestrokes.xyz',
            'smtp_pass' => 'ronak@1234',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->email->set_mailtype("html");
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('ronakpareek280@gmail.com', 'CPRNOW');
        $this->email->to('ronakonline1@gmail.com');
        $this->email->subject('Email Test');
        $msg = '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>WELCOME</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <meta name="format-detection" content="telephone=no" />
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!--<![endif]-->
    <style type="text/css">
      body {
      -webkit-text-size-adjust: 100% !important;
      -ms-text-size-adjust: 100% !important;
      -webkit-font-smoothing: antialiased !important;
      }
      img {
      border: 0 !important;
      outline: none !important;
      }
      p {
      Margin: 0px !important;
      Padding: 0px !important;
      }
      table {
      border-collapse: collapse;
      mso-table-lspace: 0px;
      mso-table-rspace: 0px;
      }
      td, a, span {
      border-collapse: collapse;
      mso-line-height-rule: exactly;
      }
      .ExternalClass * {
      line-height: 100%;
      }
      span.MsoHyperlink {
      mso-style-priority:99;
      color:inherit;}
      span.MsoHyperlinkFollowed {
      mso-style-priority:99;
      color:inherit;}
      </style>
      <style media="only screen and (min-width:481px) and (max-width:599px)" type="text/css">
      @media only screen and (min-width:481px) and (max-width:599px) {
      table[class=em_main_table] {
      width: 100% !important;
      }
      table[class=em_wrapper] {
      width: 100% !important;
      }
      td[class=em_hide], br[class=em_hide] {
      display: none !important;
      }
      img[class=em_full_img] {
      width: 100% !important;
      height: auto !important;
      }
      td[class=em_align_cent] {
      text-align: center !important;
      }
      td[class=em_aside]{
      padding-left:10px !important;
      padding-right:10px !important;
      }
      td[class=em_height]{
      height: 20px !important;
      }
      td[class=em_font]{
      font-size:14px !important;	
      }
      td[class=em_align_cent1] {
      text-align: center !important;
      padding-bottom: 10px !important;
      }
      }
      </style>
      <style media="only screen and (max-width:480px)" type="text/css">
      @media only screen and (max-width:480px) {
      table[class=em_main_table] {
      width: 100% !important;
      }
      table[class=em_wrapper] {
      width: 100% !important;
      }
      td[class=em_hide], br[class=em_hide], span[class=em_hide] {
      display: none !important;
      }
      img[class=em_full_img] {
      width: 100% !important;
      height: auto !important;
      }
      td[class=em_align_cent] {
      text-align: center !important;
      }
      td[class=em_align_cent1] {
      text-align: center !important;
      padding-bottom: 10px !important;
      }
      td[class=em_height]{
      height: 20px !important;
      }
      td[class=em_aside]{
      padding-left:10px !important;
      padding-right:10px !important;
      } 
      td[class=em_font]{
      font-size:14px !important;
      line-height:28px !important;
      }
      span[class=em_br]{
      display:block !important;
      }
      }
    </style>
  </head>
  <body style="margin:0px; padding:0px;" bgcolor="#ffffff">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
  
      <!-- === BODY SECTION=== --> 
      <tr>
        <td align="center" valign="top"  bgcolor="#ffffff">
          <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="em_main_table" style="table-layout:fixed;">
      
     
            <!-- === IMG WITH TEXT AND COUPEN CODE SECTION === -->
            <tr>
              <td valign="top" class="em_aside">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="36" class="em_height">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="middle" align="center"><img src="https://design.creativestrokes.xyz/cpr/assests/images/logo-img.png"  alt="WELCOME" style="display:block; font-family:Arial, sans-serif; font-size:25px; line-height:303px; color:#c27cbb;max-width:333px;" class="em_full_img" border="0" /></td>
                  </tr>
                  <tr>
                    <td height="35" class="em_height">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" style="font-family:\\\'Open Sans\\\', Arial, sans-serif; font-size:15px; font-weight:bold; line-height:18px; color:#30373b;">Message From</td>

                  </tr>
                  <tr>
                    <td height="41" class="em_height">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="1" bgcolor="#d8e4f0" style="font-size:0px;line-height:0px;"><img src="https://www.sendwithus.com/assets/img/emailmonks/images/spacer.gif" width="1" height="1" alt="" style="display:block;" border="0" /></td>
                  </tr>
                  <tr>
                    <td height="35" class="em_height">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="Left" style="font-family:\\\'Open Sans\\\', Arial, sans-serif; font-size:15px; font-weight:bold; line-height:18px; color:#30373b;">Name: '.$data['name'].'</td>
                  </tr>
                  <tr>
                    <td height="22" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" style="font-family:\\\'Open Sans\\\', Arial, sans-serif; font-size:15px; font-weight:bold; line-height:18px; color:#30373b;">Phone No: '.$data['phone'].'</td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" style="font-family:\\\'Open Sans\\\', Arial, sans-serif; font-size:15px; font-weight:bold; line-height:18px; color:#30373b;">Email: '.$data['email'].'</td>
                  </tr>
                  <tr>
                    <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top" align="center">
                      <table width="210" border="0" cellspacing="0" cellpadding="0" align="center">
                        <tr>
                          <td valign="middle" align="center" height="45" bgcolor="#C10E21" style="font-family:\\\'Open Sans\\\', Arial, sans-serif; font-size:17px; font-weight:bold; color:#fffff; text-transform:uppercase;">Message</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="34" class="em_height">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center" style="font-family:\\\'Open Sans\\\', Arial, sans-serif; font-size:15px; line-height:22px; color:#999999;">'.$data['message'].'
                    </td>
                  </tr>
                  <tr>
                    <td height="31" class="em_height">&nbsp;</td>
                  </tr>
                </table>
              </td>
            </tr>
            <!-- === //IMG WITH TEXT AND COUPEN CODE SECTION === -->
          </table>
        </td>
      </tr>
      <!-- === //BODY SECTION=== -->
      <!-- === FOOTER SECTION === -->
      <tr>
        <td align="center" valign="top"  bgcolor="#30373b" class="em_aside">
          <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="em_main_table" style="table-layout:fixed;">
            <tr>
              <td height="35" class="em_height">&nbsp;</td>
            </tr>
         
            <tr>
              <td height="10" style="font-size:1px; line-height:1px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" style="font-family:\\\'Open Sans\\\', Arial, sans-serif; font-size:12px; line-height:18px; color:#848789;text-transform:uppercase;">
                &copy;2&zwnj;019 Mosycom. All Rights Reserved.
              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:1px; line-height:1px;">&nbsp;</td>
            </tr>
           
            <tr>
              <td height="35" class="em_height">&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- === //FOOTER SECTION === -->
    </table>
    <div style="display:none; white-space:nowrap; font:20px courier; color:#ffffff; background-color:#ffffff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
  </body>
</html>';
        $this->email->message($msg);


        if ( ! $this->email->send()) {
            show_error($this->email->print_debugger());
        }
        else {
            echo 'hi';

        }
        redirect('Contact');
    }

}