<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class VCardDownloadController extends Controller
{
    protected $viewFileName = "vcarddownload"; //this will be the View that gets the data...
    protected $loginRequired = true; // ture, weil es für User sein soll, die angemeldet sein sollen


    public function run()
    {
        $this->view->title = "Download";
        $this->view->username = $this->user->username;

        if($id === null)
        {
            $this->view->noIdError = true;
        }
        else
        {
            $addressObj = AddressModel::getAddressById($id);

            if($addressObj === null)
            {
                $this->view->invalidIdError = true;
            }
            else
            {
                if($addressObj->userId != $this->user->id)
                {
                    $this->view->noRightsError = true;
                }
                else
                {
                    //ok, we have an Id - we have a valid Id and the User has the right to access that address

                    //lets create the VCard String

                    $vCardString = "BEGIN:VCARD\n";
                    $vCardString .= "VERSION:4.0\n";

                    $vCardString .= "N:".$addressObj->lastname.";".$addressObj->firstname.";;;\n";
                    $vCardString .= "FN:".$addressObj->firstname." ".$addressObj->lastname."\n";
                    $vCardString .= "FN:".$addressObj->firstname." ".$addressObj->lastname."\n";

                    $vCardString .= "ADR;WORK;POSTAL;LABEL=\"".$addressObj->street."\\n".$addressObj->zip." ".$addressObj->city."\"";

                    $vCardString .= ":;;".$addressObj->street.";".$addressObj->city.";;".$addressObj->zip.";\n";

                    if($addressObj->email)
                    {
                        $vCardString .= "EMAIL:".$addressObj->email."\n";
                    }

                    $vCardString .= "REV:".date('c')."\n";
                    $vCardString .= "END:VCARD";

                    //now lets think of an amazing Filename:

                    $vCardFilename = "VCard".$addressObj->id.".vcf";

                    //lets send that thing to the browser
                    header('Content-Type: text/vcard'); //text/vcard is mimetype of vcard
                    header("Content-Transfer-Encoding: Binary");
                    header("Content-disposition: attachment; filename=\"" .$vCardFilename . "\"");

                    echo $vCardString;
                    exit();


                }
            }
        }


    }

}