<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $nic = Country::where('name', "Nicaragua")->first();
        if ($nic === null) {
            // country doesn't exist
           Country::create([
                'name'    => 'Nicaragua', 
                'prefix' => 'NIC', 
                'country_code' => '+505',
                'iso_code' => 'NI',
                'order' => '1',
                'active' => true
            ]);
        }else{
            $nic->order = 1;
            $nic->iso_code = 'NI';
            $nic->save();
        }


        $mx = Country::where('name', "Mexico")->first();
        if ($mx === null) {
            // country doesn't exist
            Country::create([
                'name'    => 'Mexico', 
                'prefix' => 'MEX', 
                'country_code' => '+52',
                'order' => '2',
                'iso_code' => 'MX',
                'active' => true
            ]);
        }else{
            $mx->order = 2;
            $mx->iso_code = 'MX';
            $mx->save();
        }


        $usa = Country::where('name', "United States")->first();
        if ($usa === null) {
            // country doesn't exist
            Country::create([
                'name'    => 'United States', 
                'prefix' => 'USA', 
                'country_code' => '+1',
                'order' => '2',
                'iso_code' => 'US',
                'active' => true
            ]);
        }else{
            $usa->order = 2;
            $usa->iso_code = 'US';
            $usa->save();
        }

        

        //Add the rest of the countries codes
        $countryfind = Country::where('name', "Afghanistan")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Afghanistan', 
                'prefix' => 'AFG', 
                'country_code' => '+93',
                'iso_code' => 'AF',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AF';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Albania")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Albania', 
                'prefix' => 'ALB', 
                'country_code' => '+355',
                'iso_code' => 'AL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AL';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Algeria")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Algeria', 
                'prefix' => 'DZA', 
                'country_code' => '+213',
                'iso_code' => 'DZ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'DZ';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "American Samoa")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'American Samoa', 
                'prefix' => 'DZA', 
                'country_code' => '+1-684',
                'order' => '2',
                'iso_code' => 'AS',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AS';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Andorra")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Andorra', 
                'prefix' => 'AND', 
                'country_code' => '+376',
                'iso_code' => 'AD',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AD';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Angola")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Angola', 
                'prefix' => 'AGO', 
                'country_code' => '+244',
                'order' => '2',
                'iso_code' => 'AO',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AO';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Anguilla")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Anguilla', 
                'prefix' => 'AIA', 
                'country_code' => '+1-264',
                'iso_code' => 'AI',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AI';
            $countryfind->save();
        }

        $countryfind = Country::where('name', "Antarctica")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Antarctica', 
                'prefix' => 'ATA', 
                'country_code' => '+672',
                'iso_code' => 'AQ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AQ';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Antigua and Barbuda")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Antigua and Barbuda', 
                'prefix' => 'ATG', 
                'country_code' => '+1-268',
                'iso_code' => 'AG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AG';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Argentina")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Argentina', 
                'prefix' => 'ARG', 
                'country_code' => '+54',
                'iso_code' => 'AR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AR';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Armenia")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Armenia', 
                'prefix' => 'ARM', 
                'country_code' => '+374',
                'iso_code' => 'AM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AM';
            $countryfind->save();
        }

        $countryfind = Country::where('name', "Aruba")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Aruba', 
                'prefix' => 'ABW', 
                'country_code' => '+297',
                'iso_code' => 'AW',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AW';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Australia")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Australia', 
                'prefix' => 'AUS', 
                'country_code' => '+61',
                'iso_code' => 'AU',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AU';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Austria")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Austria', 
                'prefix' => 'AUT', 
                'country_code' => '+43',
                'iso_code' => 'AT',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AT';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Azerbaijan")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Azerbaijan', 
                'prefix' => 'AZE',
                'country_code' => '+994',
                'iso_code' => 'AZ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AZ';
            $countryfind->save();
        }

        $countryfind = Country::where('name', "Bahamas")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Bahamas', 
                'prefix' => 'BHS', 
                'country_code' => '+1-242',
                'iso_code' => 'BS',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BS';
            $countryfind->save();
        }

        $countryfind = Country::where('name', "Bahrain")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Bahrain', 
                'prefix' => 'BHR', 
                'country_code' => '+973',
                'iso_code' => 'BH',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BH';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Bangladesh")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Bangladesh', 
                'prefix' => 'BGD', 
                'country_code' => '+880',
                'iso_code' => 'BD',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BD';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Barbados")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Barbados', 
                'prefix' => 'BRB', 
                'country_code' => '+1-246',
                'iso_code' => 'BB',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BB';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Belarus")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Belarus', 
                'prefix' => 'BLR', 
                'country_code' => '+375',
                'iso_code' => 'BY',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BY';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Belgium")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Belgium', 
                'prefix' => 'BEL', 
                'country_code' => '+32',
                'iso_code' => 'BE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BE';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Belize")->first();
       if ($countryfind === null) {
       Country::create([
                'name'    => 'Belize', 
                'prefix' => 'BLZ', 
                'country_code' => '+501',
                'iso_code' => 'BZ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BZ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Benin")->first();
       if ($countryfind === null) {
       Country::create([
                'name'    => 'Benin', 
                'prefix' => 'BEN', 
                'country_code' => '+229',
                'iso_code' => 'BJ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BJ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Bermuda")->first();
       if ($countryfind === null) {
       Country::create([
                'name'    => 'Bermuda', 
                'prefix' => 'BMU', 
                'country_code' => '+1-441',
                'iso_code' => 'BM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Bhutan")->first();
       if ($countryfind === null) {
       Country::create([
                'name'    => 'Bhutan', 
                'prefix' => 'BTN', 
                'country_code' => '+975',
                'iso_code' => 'BT',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BT';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Bolivia")->first();
       if ($countryfind === null) {
       Country::create([
                'name'    => 'Bolivia', 
                'prefix' => 'BOL', 
                'country_code' => '+591',
                'iso_code' => 'BO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Bosnia and Herzegovina")->first();
       if ($countryfind === null) {
       Country::create([
                'name'    => 'Bosnia and Herzegovina', 
                'prefix' => 'BIH', 
                'country_code' => '+387',
                'iso_code' => 'BA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Botswana")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Botswana', 
                'prefix' => 'BWA', 
                'country_code' => '+267',
                'iso_code' => 'BW',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BW';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Brazil")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Brazil', 
                'prefix' => 'BRA', 
                'country_code' => '+55',
                'iso_code' => 'BR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "British Indian Ocean Territory")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'British Indian Ocean Territory', 
                'prefix' => 'IOT', 
                'country_code' => '+246',
                'iso_code' => 'IO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "British Virgin Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'British Virgin Islands', 
                'prefix' => 'VGB', 
                'country_code' => '+1-284',
                'iso_code' => 'VG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'VG';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Brunei")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Brunei', 
                'prefix' => 'BRN', 
                'country_code' => '+673',
                'iso_code' => 'BN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Bulgaria")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Bulgaria', 
                'prefix' => 'BGR', 
                'country_code' => '+359',
                'iso_code' => 'BG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BG';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Burkina Faso")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Burkina Faso', 
                'prefix' => 'BFA', 
                'country_code' => '+226',
                'iso_code' => 'BF',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BF';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Burundi")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Burundi', 
                'prefix' => 'BDI', 
                'country_code' => '+257',
                'iso_code' => 'BI',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BI';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Cambodia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Cambodia', 
                'prefix' => 'KHM', 
                'country_code' => '+855',
                'iso_code' => 'KH',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KH';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Cameroon")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Cameroon', 
                'prefix' => 'CMR', 
                'country_code' => '+237',
                'iso_code' => 'CM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Canada")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Canada', 
                'prefix' => 'CAN', 
                'country_code' => '+1',
                'iso_code' => 'CA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Cape Verde")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Cape Verde', 
                'prefix' => 'CPV', 
                'country_code' => '+238',
                'iso_code' => 'CV',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CV';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Cayman Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Cayman Islands', 
                'prefix' => 'CYM', 
                'country_code' => '+1-345',
                'iso_code' => 'KY',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KY';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Central African Republic")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Central African Republic', 
                'prefix' => 'CAF', 
                'country_code' => '+236',
                'iso_code' => 'CF',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CF';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Chad")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Chad', 
                'prefix' => 'TCD', 
                'country_code' => '+235',
                'iso_code' => 'TD',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TD';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Chile")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Chile', 
                'prefix' => 'CHL', 
                'country_code' => '+56',
                'iso_code' => 'CL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CL';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "China")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'China', 
                'prefix' => 'CHN', 
                'country_code' => '+86',
                'iso_code' => 'CN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CN';
            $countryfind->save();
        }

       $countryfind = Country::where('name', "Christmas Island")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Christmas Island', 
                'prefix' => 'CXR', 
                'country_code' => '+61',
                'iso_code' => 'CX',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CX';
            $countryfind->save();
        }

       $countryfind = Country::where('name', "Cocos Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Cocos Islands', 
                'prefix' => 'CCK', 
                'country_code' => '+61',
                'iso_code' => 'CC',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CC';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Colombia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Colombia', 
                'prefix' => 'COL', 
                'country_code' => '+57',
                'iso_code' => 'CO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Comoros")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Comoros', 
                'prefix' => 'COM', 
                'country_code' => '+269',
                'iso_code' => 'KM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Cook Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Cook Islands', 
                'prefix' => 'COK', 
                'country_code' => '+682',
                'iso_code' => 'CK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CK';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Costa Rica")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Costa Rica', 
                'prefix' => 'CRI', 
                'country_code' => '+506',
                'iso_code' => 'CR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Croatia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Croatia', 
                'prefix' => 'HRV', 
                'country_code' => '+385',
                'iso_code' => 'HR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'HR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Cuba")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Cuba', 
                'prefix' => 'CUB', 
                'country_code' => '+53',
                'iso_code' => 'CU',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CU';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Curacao")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Curacao', 
                'prefix' => 'CUW', 
                'country_code' => '+599',
                'iso_code' => 'CW',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CW';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Cyprus")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Cyprus', 
                'prefix' => 'CYP', 
                'country_code' => '+357',
                'iso_code' => 'CY',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CY';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Czech Republic")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Czech Republic', 
                'prefix' => 'CZE', 
                'country_code' => '+420',
                'iso_code' => 'CZ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CZ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Democratic Republic of the Congo")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Democratic Republic of the Congo', 
                'prefix' => 'COD', 
                'country_code' => '+243',
                'iso_code' => 'CD',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CD';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Denmark")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Denmark', 
                'prefix' => 'DNK', 
                'country_code' => '+45',
                'iso_code' => 'DK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'DK';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Djibouti")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Djibouti', 
                'prefix' => 'DJI', 
                'country_code' => '+253',
                'iso_code' => 'DJ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'DJ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Dominica")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Dominica', 
                'prefix' => 'DMA', 
                'country_code' => '+1-767',
                'iso_code' => 'DM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'DM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Dominican Republic")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Dominican Republic', 
                'prefix' => 'DOM', 
                'country_code' => '+1-809',
                'iso_code' => 'DO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'DO';
            $countryfind->save();
        }

       $countryfind = Country::where('name', "Dominican Republic")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Dominican Republic', 
                'prefix' => 'DOM', 
                'country_code' => '+1-829',
                'iso_code' => 'DO',
                'order' => '2',
                'active' => true
            ]);

        Country::create([
                'name'    => 'Dominican Republic', 
                'prefix' => 'DOM', 
                'country_code' => '+1-849',
                'order' => '2',
                'iso_code' => 'DO',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'DO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "East Timor")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'East Timor', 
                'prefix' => 'TLS', 
                'country_code' => '+670',
                'iso_code' => 'TL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TL';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Ecuador")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Ecuador', 
                'prefix' => 'ECU', 
                'country_code' => '+593',
                'iso_code' => 'EC',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'EC';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Egypt")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Egypt', 
                'prefix' => 'EGY', 
                'country_code' => '+20',
                'iso_code' => 'EG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'EG';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "El Salvador")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'El Salvador', 
                'prefix' => 'SLV', 
                'country_code' => '+503',
                'iso_code' => 'SV',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SV';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Equatorial Guinea")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Equatorial Guinea', 
                'prefix' => 'GNQ', 
                'country_code' => '+240',
                'iso_code' => 'GQ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GQ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Eritrea")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Eritrea', 
                'prefix' => 'ERI', 
                'country_code' => '+291',
                'iso_code' => 'ER',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ER';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Estonia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Estonia', 
                'prefix' => 'EST', 
                'country_code' => '+372',
                'iso_code' => 'EE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'EE';
            $countryfind->save();
        }

       $countryfind = Country::where('name', "Ethiopia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Ethiopia', 
                'prefix' => 'ETH', 
                'country_code' => '+251',
                'iso_code' => 'ET',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ET';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Falkland Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Falkland Islands', 
                'prefix' => 'FLK', 
                'country_code' => '+500',
                'iso_code' => 'FK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'FK';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Faroe Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Faroe Islands', 
                'prefix' => 'FRO', 
                'country_code' => '+298',
                'iso_code' => 'FO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'FO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Fiji")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Fiji', 
                'prefix' => 'FJI', 
                'country_code' => '+679',
                'iso_code' => 'FJ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'FJ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Finland")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Finland', 
                'prefix' => 'FIN', 
                'country_code' => '+358',
                'iso_code' => 'FI',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'FI';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "France")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'France', 
                'prefix' => 'FRA', 
                'country_code' => '+33',
                'iso_code' => 'FR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'FR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "French Polynesia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'French Polynesia', 
                'prefix' => 'PYF', 
                'country_code' => '+689',
                'iso_code' => 'PF',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PF';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Gabon")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Gabon', 
                'prefix' => 'GAB', 
                'country_code' => '+241',
                'iso_code' => 'GA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Gambia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Gambia', 
                'prefix' => 'GMB', 
                'country_code' => '+220',
                'iso_code' => 'GM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Georgia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Georgia', 
                'prefix' => 'GEO', 
                'country_code' => '+995',
                'iso_code' => 'GE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GE';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Germany")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Germany', 
                'prefix' => 'DEU', 
                'country_code' => '+49',
                'iso_code' => 'DE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'DE';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Ghana")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Ghana', 
                'prefix' => 'GHA', 
                'country_code' => '+233',
                'order' => '2',
                'iso_code' => 'GH',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GH';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Gibraltar")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Gibraltar', 
                'prefix' => 'GIB', 
                'country_code' => '+350',
                'order' => '2',
                'iso_code' => 'GI',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GI';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Greece")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Greece', 
                'prefix' => 'GRC', 
                'country_code' => '+30',
                'iso_code' => 'GR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Greenland")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Greenland', 
                'prefix' => 'GRL', 
                'country_code' => '+299',
                'iso_code' => 'GL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GL';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Grenada")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Grenada', 
                'prefix' => 'GRD', 
                'country_code' => '+1-473',
                'iso_code' => 'GD',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GD';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Guam")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Guam', 
                'prefix' => 'GUM', 
                'country_code' => '+1-671',
                'iso_code' => 'GU',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GU';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Guatemala")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Guatemala', 
                'prefix' => 'GTM', 
                'country_code' => '+502',
                'iso_code' => 'GT',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GT';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Guernsey")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Guernsey', 
                'prefix' => 'GGY', 
                'country_code' => '+44-1481',
                'iso_code' => 'GG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GG';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Guinea")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Guinea', 
                'prefix' => 'GIN', 
                'country_code' => '+224',
                'iso_code' => 'GN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Guinea-Bissau")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Guinea-Bissau', 
                'prefix' => 'GNB', 
                'country_code' => '+245',
                'iso_code' => 'GW',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GW';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Guyana")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Guyana', 
                'prefix' => 'GUY', 
                'country_code' => '+592',
                'iso_code' => 'GY',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GY';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Haiti")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Haiti', 
                'prefix' => 'HTI', 
                'country_code' => '+509',
                'iso_code' => 'HT',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'HT';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Honduras")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Honduras', 
                'prefix' => 'HND', 
                'country_code' => '+504',
                'iso_code' => 'HN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'HN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Hong Kong")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Hong Kong', 
                'prefix' => 'HKG', 
                'country_code' => '+852',
                'iso_code' => 'HK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'HK';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Hungary")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Hungary', 
                'prefix' => 'HUN', 
                'country_code' => '+36',
                'iso_code' => 'HU',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'HU';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Iceland")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Iceland', 
                'prefix' => 'ISL', 
                'country_code' => '+354',
                'iso_code' => 'IS',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IS';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "India")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'India', 
                'prefix' => 'IND', 
                'country_code' => '+91',
                'iso_code' => 'IN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Indonesia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Indonesia', 
                'prefix' => 'IDN', 
                'country_code' => '+62',
                'iso_code' => 'ID',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ID';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Iran")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Iran', 
                'prefix' => 'IRN', 
                'country_code' => '+98',
                'iso_code' => 'IR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Iraq")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Iraq', 
                'prefix' => 'IRQ', 
                'country_code' => '+964',
                'iso_code' => 'IQ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IQ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Ireland")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Ireland', 
                'prefix' => 'IRL', 
                'country_code' => '+353',
                'iso_code' => 'IE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IE';
            $countryfind->save();
        }

       $countryfind = Country::where('name', "Isle of Man")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Isle of Man', 
                'prefix' => 'IMN', 
                'country_code' => '+44-1624',
                'iso_code' => 'IM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Israel")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Israel', 
                'prefix' => 'ISR', 
                'country_code' => '+972',
                'iso_code' => 'IL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IL';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Italy")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Italy', 
                'prefix' => 'ITA', 
                'country_code' => '+39',
                'iso_code' => 'IT',
                'order' => '2',
                'active' => true
            ]); 
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'IT';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Ivory Coast")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Ivory Coast', 
                'prefix' => 'CIV', 
                'country_code' => '+225',
                'iso_code' => 'CI',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CI';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Jamaica")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Jamaica', 
                'prefix' => 'JAM', 
                'country_code' => '+1-876',
                'order' => '2',
                'iso_code' => 'JM',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'JM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Japan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Japan', 
                'prefix' => 'JPN', 
                'country_code' => '+81',
                'iso_code' => 'JP',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'JP';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Jersey")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Jersey', 
                'prefix' => 'JEY', 
                'country_code' => '+44-1534',
                'iso_code' => 'JE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'JE';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Jordan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Jordan', 
                'prefix' => 'JOR', 
                'country_code' => '+962',
                'iso_code' => 'JO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'JO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Kazakhstan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Kazakhstan', 
                'prefix' => 'KAZ', 
                'country_code' => '+7',
                'iso_code' => 'KZ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KZ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Kenya")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Kenya', 
                'prefix' => 'KEN', 
                'country_code' => '+254',
                'iso_code' => 'KE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KE';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Kiribati")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Kiribati', 
                'prefix' => 'KIR', 
                'country_code' => '+686',
                'iso_code' => 'KI',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KI';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Kosovo")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Kosovo', 
                'prefix' => 'XKX', 
                'country_code' => '+383',
                'iso_code' => 'XK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'XK';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Kuwait")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Kuwait', 
                'prefix' => 'KWT', 
                'country_code' => '+965',
                'iso_code' => 'KW',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KW';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Kyrgyzstan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Kyrgyzstan', 
                'prefix' => 'KGZ', 
                'country_code' => '+996',
                'iso_code' => 'KG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KG';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Laos")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Laos', 
                'prefix' => 'LAO', 
                'country_code' => '+856',
                'iso_code' => 'LA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Latvia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Latvia', 
                'prefix' => 'LVA', 
                'country_code' => '+371',
                'iso_code' => 'LV',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LV';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Lebanon")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Lebanon', 
                'prefix' => 'LBN', 
                'country_code' => '+961',
                'iso_code' => 'LB',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LB';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Lesotho")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Lesotho', 
                'prefix' => 'LSO', 
                'country_code' => '+266',
                'iso_code' => 'LS',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LS';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Liberia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Liberia', 
                'prefix' => 'LBR', 
                'country_code' => '+231',
                'iso_code' => 'LR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Libya")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Libya', 
                'prefix' => 'LBY', 
                'country_code' => '+218',
                'iso_code' => 'LY',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LY';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Liechtenstein")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Liechtenstein', 
                'prefix' => 'LIE', 
                'country_code' => '+423',
                'iso_code' => 'LI',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LI';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Lithuania")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Lithuania', 
                'prefix' => 'LTU', 
                'country_code' => '+370',
                'iso_code' => 'LT',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LT';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Luxembourg")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Luxembourg', 
                'prefix' => 'LUX', 
                'country_code' => '+352',
                'iso_code' => 'LU',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LU';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Macau")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Macau', 
                'prefix' => 'MAC', 
                'country_code' => '+853',
                'iso_code' => 'MO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Macedonia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Macedonia', 
                'prefix' => 'MKD', 
                'country_code' => '+389',
                'iso_code' => 'MK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MK';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Madagascar")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Madagascar', 
                'prefix' => 'MDG', 
                'country_code' => '+261',
                'iso_code' => 'MG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MG';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Malawi")->first();
       if ($countryfind === null) {             
        Country::create([
                'name'    => 'Malawi', 
                'prefix' => 'MWI', 
                'country_code' => '+265',
                'order' => '2',
                'iso_code' => 'MW',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MW';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Malaysia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Malaysia', 
                'prefix' => 'MYS', 
                'country_code' => '+60',
                'iso_code' => 'MY',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MY';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Maldives")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Maldives', 
                'prefix' => 'MDV', 
                'country_code' => '+960',
                'iso_code' => 'MV',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MV';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Mali")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Mali', 
                'prefix' => 'MLI', 
                'country_code' => '+223',
                'iso_code' => 'ML',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ML';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Malta")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Malta', 
                'prefix' => 'MLT', 
                'country_code' => '+356',
                'iso_code' => 'MT',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MT';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Marshall Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Marshall Islands', 
                'prefix' => 'MHL', 
                'country_code' => '+692',
                'iso_code' => 'MH',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MH';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Mauritania")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Mauritania', 
                'prefix' => 'MRT', 
                'country_code' => '+222',
                'iso_code' => 'MR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Mauritius")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Mauritius', 
                'prefix' => 'MUS', 
                'country_code' => '+230',
                'iso_code' => 'MU',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MU';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Mayotte")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Mayotte', 
                'prefix' => 'MYT', 
                'country_code' => '+262',
                'iso_code' => 'YT',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'YT';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Micronesia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Micronesia', 
                'prefix' => 'FSM', 
                'country_code' => '+691',
                'iso_code' => 'FM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'FM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Moldova")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Moldova', 
                'prefix' => 'MDA', 
                'country_code' => '+373',
                'iso_code' => 'MD',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MD';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Monaco")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Monaco', 
                'prefix' => 'MCO', 
                'country_code' => '+377',
                'iso_code' => 'MC',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MC';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Mongolia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Mongolia', 
                'prefix' => 'MNG', 
                'country_code' => '+976',
                'iso_code' => 'MN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Montenegro")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Montenegro', 
                'prefix' => 'MNE', 
                'country_code' => '+382',
                'iso_code' => 'ME',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ME';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Montserrat")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Montserrat', 
                'prefix' => 'MSR', 
                'country_code' => '+1-664',
                'iso_code' => 'MS',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MS';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Morocco")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Morocco', 
                'prefix' => 'MAR', 
                'country_code' => '+212',
                'iso_code' => 'MA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Mozambique")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Mozambique', 
                'prefix' => 'MOZ', 
                'country_code' => '+258',
                'iso_code' => 'MZ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MZ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Myanmar")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Myanmar', 
                'prefix' => 'MMR', 
                'country_code' => '+95',
                'iso_code' => 'MM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MM';
            $countryfind->save();
        }

       $countryfind = Country::where('name', "Namibia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Namibia', 
                'prefix' => 'NAM', 
                'country_code' => '+264',
                'iso_code' => 'NA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Nauru")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Nauru', 
                'prefix' => 'NRU', 
                'country_code' => '+674',
                'iso_code' => 'NR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Nepal")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Nepal', 
                'prefix' => 'NPL', 
                'country_code' => '+977',
                'iso_code' => 'NP',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NP';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Netherlands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Netherlands', 
                'prefix' => 'NLD', 
                'country_code' => '+31',
                'iso_code' => 'NL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NL';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Netherlands Antilles")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Netherlands Antilles', 
                'prefix' => 'ANT', 
                'country_code' => '+599',
                'iso_code' => 'AN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "New Caledonia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'New Caledonia', 
                'prefix' => 'NCL', 
                'country_code' => '+687',
                'iso_code' => 'NC',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NC';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "New Zealand")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'New Zealand', 
                'prefix' => 'NZL', 
                'country_code' => '+64',
                'iso_code' => 'NZ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NZ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Niger")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Niger', 
                'prefix' => 'NER', 
                'country_code' => '+227',
                'iso_code' => 'NE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NE';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Nigeria")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Nigeria', 
                'prefix' => 'NGA', 
                'country_code' => '+234',
                'iso_code' => 'NG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NG';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Niue")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Niue', 
                'prefix' => 'NIU', 
                'country_code' => '+683',
                'iso_code' => 'NU',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NU';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "North Korea")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'North Korea', 
                'prefix' => 'PRK', 
                'country_code' => '+850',
                'iso_code' => 'KP',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KP';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Northern Mariana Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Northern Mariana Islands', 
                'prefix' => 'MNP', 
                'country_code' => '+1-670',
                'iso_code' => 'MP',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MP';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Norway")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Norway', 
                'prefix' => 'NOR', 
                'country_code' => '+47',
                'iso_code' => 'NO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'NO';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Oman")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Oman', 
                'prefix' => 'OMN', 
                'country_code' => '+968',
                'iso_code' => 'OM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'OM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Pakistan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Pakistan', 
                'prefix' => 'PAK', 
                'country_code' => '+92',
                'iso_code' => 'PK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PK';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Palau")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Palau', 
                'prefix' => 'PLW', 
                'country_code' => '+680',
                'iso_code' => 'PW',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PW';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Palestine")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Palestine', 
                'prefix' => 'PSE', 
                'country_code' => '+970',
                'iso_code' => 'PS',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PS';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Panama")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Panama', 
                'prefix' => 'PAN', 
                'country_code' => '+507',
                'iso_code' => 'PA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Papua New Guinea")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Papua New Guinea', 
                'prefix' => 'PNG', 
                'country_code' => '+675',
                'iso_code' => 'PG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PG';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Paraguay")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Paraguay', 
                'prefix' => 'PRY', 
                'country_code' => '+595',
                'iso_code' => 'PY',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PY';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Peru")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Peru', 
                'prefix' => 'PER', 
                'country_code' => '+51',
                'iso_code' => 'PE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PE';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Philippines")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Philippines', 
                'prefix' => 'PHL', 
                'country_code' => '+63',
                'iso_code' => 'PH',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PH';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Pitcairn")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Pitcairn', 
                'prefix' => 'PCN', 
                'country_code' => '+64',
                'iso_code' => 'PN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Poland")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Poland', 
                'prefix' => 'POL',
                'country_code' => '+48',
                'iso_code' => 'PL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PL';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Portugal")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Portugal', 
                'prefix' => 'PRT',
                'country_code' => '+351',
                'iso_code' => 'PT',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PT';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Puerto Rico")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Puerto Rico', 
                'prefix' => 'PRI',
                'country_code' => '+1-787',
                'iso_code' => 'PR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Puerto Rico")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Puerto Rico', 
                'prefix' => 'PRI',
                'country_code' => '+1-939',
                'iso_code' => 'PR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Qatar")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Qatar', 
                'prefix' => 'QAT',
                'country_code' => '+974',
                'iso_code' => 'QA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'QA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Republic of the Congo")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Republic of the Congo', 
                'prefix' => 'COG',
                'country_code' => '+242',
                'iso_code' => 'CG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CG';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Reunion")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Reunion', 
                'prefix' => 'REU',
                'country_code' => '+262',
                'iso_code' => 'RE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'RE';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Romania")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Romania', 
                'prefix' => 'ROU',
                'country_code' => '+40',
                'iso_code' => 'RO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'RO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Russia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Russia', 
                'prefix' => 'RUS',
                'country_code' => '+7',
                'iso_code' => 'RU',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'RU';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Rwanda")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Rwanda', 
                'prefix' => 'RWA',
                'country_code' => '+250',
                'iso_code' => 'RW',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'RW';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Saint Barthelemy")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Saint Barthelemy', 
                'prefix' => 'BLM',
                'country_code' => '+590',
                'iso_code' => 'BL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'BL';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Saint Helena")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Saint Helena', 
                'prefix' => 'SHN',
                'country_code' => '+290',
                'iso_code' => 'SH',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SH';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Saint Kitts and Nevis")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Saint Kitts and Nevis', 
                'prefix' => 'KNA',
                'country_code' => '+1-869',
                'iso_code' => 'KN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Saint Lucia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Saint Lucia', 
                'prefix' => 'LCA',
                'country_code' => '+1-758',
                'iso_code' => 'LC',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LC';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Saint Martin")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Saint Martin', 
                'prefix' => 'MAF',
                'country_code' => '+590',
                'iso_code' => 'MF',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'MF';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Saint Pierre and Miquelon")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Saint Pierre and Miquelon', 
                'prefix' => 'SPM',
                'country_code' => '+508',
                'iso_code' => 'PM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'PM';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Saint Vincent and the Grenadines")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Saint Vincent and the Grenadines', 
                'prefix' => 'VCT',
                'country_code' => '+1-784',
                'iso_code' => 'VC',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'VC';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Samoa")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Samoa', 
                'prefix' => 'WSM',
                'country_code' => '+685',
                'iso_code' => 'WS',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'WS';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "San Marino")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'San Marino', 
                'prefix' => 'SMR',
                'country_code' => '+378',
                'iso_code' => 'SM',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SM';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Sao Tome and Principe")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Sao Tome and Principe', 
                'prefix' => 'STP',
                'country_code' => '+239',
                'iso_code' => 'ST',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ST';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Saudi Arabia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Saudi Arabia', 
                'prefix' => 'SAU',
                'country_code' => '+966',
                'iso_code' => 'SA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Senegal")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Senegal', 
                'prefix' => 'SEN',
                'country_code' => '+221',
                'iso_code' => 'SN',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SN';
            $countryfind->save();
        }

       $countryfind = Country::where('name', "Serbia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Serbia', 
                'prefix' => 'SRB',
                'country_code' => '+381',
                'iso_code' => 'RS',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'RS';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Seychelles")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Seychelles', 
                'prefix' => 'SYC',
                'country_code' => '+248',
                'iso_code' => 'SC',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SC';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Sierra Leone")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Sierra Leone', 
                'prefix' => 'SLE',
                'country_code' => '+232',
                'iso_code' => 'SL',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SL';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Singapore")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Singapore', 
                'prefix' => 'SGP',
                'country_code' => '+65',
                'iso_code' => 'SG',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SG';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Sint Maarten")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Sint Maarten', 
                'prefix' => 'SXM',
                'country_code' => '+1-721',
                'iso_code' => 'SX',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SX';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Slovakia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Slovakia', 
                'prefix' => 'SVK',
                'country_code' => '+421',
                'iso_code' => 'SK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SK';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Slovenia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Slovenia', 
                'prefix' => 'SVN',
                'country_code' => '+386',
                'iso_code' => 'SI',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SI';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Solomon Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Solomon Islands', 
                'prefix' => 'SLB',
                'country_code' => '+677',
                'iso_code' => 'SB',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SB';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Somalia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Somalia', 
                'prefix' => 'SOM',
                'country_code' => '+252',
                'iso_code' => 'SO',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SO';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "South Africa")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'South Africa', 
                'prefix' => 'ZAF',
                'country_code' => '+27',
                'iso_code' => 'ZA',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ZA';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "South Korea")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'South Korea', 
                'prefix' => 'KOR',
                'country_code' => '+82',
                'iso_code' => 'KR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'KR';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "South Sudan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'South Sudan', 
                'prefix' => 'SSD',
                'country_code' => '+211',
                'iso_code' => 'SS',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SS';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Spain")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Spain', 
                'prefix' => 'ESP',
                'country_code' => '+34',
                'iso_code' => 'ES',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ES';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Sri Lanka")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Sri Lanka', 
                'prefix' => 'LKA',
                'country_code' => '+94',
                'iso_code' => 'LK',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'LK';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Sudan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Sudan', 
                'prefix' => 'SDN',
                'country_code' => '+249',
                'iso_code' => 'SD',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SD';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Suriname")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Suriname', 
                'prefix' => 'SUR',
                'country_code' => '+597',
                'iso_code' => 'SR',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SR';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Svalbard and Jan Mayen")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Svalbard and Jan Mayen', 
                'prefix' => 'SJM',
                'country_code' => '+47',
                'iso_code' => 'SJ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SJ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Swaziland")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Swaziland', 
                'prefix' => 'SWZ',
                'country_code' => '+268',
                'iso_code' => 'SZ',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SZ';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Sweden")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Sweden', 
                'prefix' => 'SWE',
                'country_code' => '+46',
                'iso_code' => 'SE',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SE';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Switzerland")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Switzerland', 
                'prefix' => 'CHE',
                'country_code' => '+41',
                'iso_code' => 'CH',
                'order' => '2',
                'active' => true
            ]);
        }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'CH';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Syria")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Syria', 
                'prefix' => 'SYR',
                'country_code' => '+963',
                'iso_code' => 'SY',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'SY';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Taiwan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Taiwan', 
                'prefix' => 'TWN',
                'country_code' => '+886',
                'iso_code' => 'TW',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TW';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Tajikistan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Tajikistan', 
                'prefix' => 'TJK',
                'country_code' => '+992',
                'iso_code' => 'TJ',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TJ';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Tanzania")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Tanzania', 
                'prefix' => 'TZA',
                'country_code' => '+255',
                'iso_code' => 'TZ',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TZ';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Thailand")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Thailand', 
                'prefix' => 'THA',
                'country_code' => '+66',
                'iso_code' => 'TH',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TH';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Togo")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Togo', 
                'prefix' => 'TGO',
                'country_code' => '+228',
                'iso_code' => 'TG',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TG';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Tokelau")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Tokelau', 
                'prefix' => 'TKL',
                'country_code' => '+690',
                'iso_code' => 'TK',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TK';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Tonga")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Tonga', 
                'prefix' => 'TON',
                'country_code' => '+676',
                'iso_code' => 'TO',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TO';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Trinidad and Tobago")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Trinidad and Tobago', 
                'prefix' => 'TTO',
                'country_code' => '+1-868',
                'iso_code' => 'TT',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TT';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Tunisia")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Tunisia', 
                'prefix' => 'TUN',
                'country_code' => '+216',
                'iso_code' => 'TN',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TN';
            $countryfind->save();
        }



      $countryfind = Country::where('name', "Turkey")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Turkey', 
                'prefix' => 'TUR',
                'country_code' => '+90',
                'iso_code' => 'TR',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TR';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Turkmenistan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Turkmenistan', 
                'prefix' => 'TKM',
                'country_code' => '+993',
                'iso_code' => 'TM',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TM';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Turks and Caicos Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Turks and Caicos Islands', 
                'prefix' => 'TCA',
                'country_code' => '+1-649',
                'iso_code' => 'TC',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TC';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Tuvalu")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Tuvalu', 
                'prefix' => 'TUV',
                'country_code' => '+688',
                'iso_code' => 'TV',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'TV';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "U.S. Virgin Islands")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'U.S. Virgin Islands', 
                'prefix' => 'VIR',
                'country_code' => '+1-340',
                'iso_code' => 'VI',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'VI';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Uganda")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Uganda', 
                'prefix' => 'UGA',
                'country_code' => '+256',
                'iso_code' => 'UG',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'UG';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Ukraine")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Ukraine', 
                'prefix' => 'UKR',
                'country_code' => '+380',
                'iso_code' => 'UA',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'UA';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "United Arab Emirates")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'United Arab Emirates', 
                'prefix' => 'ARE',
                'country_code' => '+971',
                'iso_code' => 'AE',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'AE';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "United Kingdom")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'United Kingdom', 
                'prefix' => 'GBR',
                'country_code' => '+44',
                'iso_code' => 'GB',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'GB';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Uruguay")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Uruguay', 
                'prefix' => 'URY',
                'country_code' => '+598',
                'iso_code' => 'UY',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'UY';
            $countryfind->save();
        }



      $countryfind = Country::where('name', "Uzbekistan")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Uzbekistan', 
                'prefix' => 'UZB',
                'country_code' => '+998',
                'iso_code' => 'UZ',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'UZ';
            $countryfind->save();
        }



      $countryfind = Country::where('name', "Vanuatu")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Vanuatu', 
                'prefix' => 'VUT',
                'country_code' => '+678',
                'iso_code' => 'VU',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'VU';
            $countryfind->save();
        }



      $countryfind = Country::where('name', "Vatican")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Vatican', 
                'prefix' => 'VAT',
                'country_code' => '+379',
                'iso_code' => 'VA',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'VA';
            $countryfind->save();
        }



      $countryfind = Country::where('name', "Venezuela")->first();
       if ($countryfind === null) {
         Country::create([
                'name'    => 'Venezuela', 
                'prefix' => 'VEN',
                'country_code' => '+58',
                'iso_code' => 'VE',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'VE';
            $countryfind->save();
        }


      $countryfind = Country::where('name', "Vietnam")->first();
       if ($countryfind === null) {
         Country::create([
                'name'    => 'Vietnam', 
                'prefix' => 'VNM',
                'country_code' => '+84',
                'iso_code' => 'VN',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'VN';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Wallis and Futuna")->first();
       if ($countryfind === null) {
         Country::create([
                'name'    => 'Wallis and Futuna', 
                'prefix' => 'WLF',
                'country_code' => '+681',
                'iso_code' => 'WF',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'WF';
            $countryfind->save();
        }



       $countryfind = Country::where('name', "Western Sahara")->first();
       if ($countryfind === null) {
        Country::create([
                'name'    => 'Western Sahara', 
                'prefix' => 'ESH',
                'country_code' => '+212',
                'order' => '2',
                'iso_code' => 'EH',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'EH';
            $countryfind->save();
        }


       $countryfind = Country::where('name', "Yemen")->first();
       if ($countryfind === null) {
         Country::create([
                'name'    => 'Yemen', 
                'prefix' => 'YEM',
                'country_code' => '+967',
                'iso_code' => 'YE',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'YE';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Zambia")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Zambia', 
                'prefix' => 'ZMB',
                'country_code' => '+260',
                'iso_code' => 'ZM',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ZM';
            $countryfind->save();
        }


        $countryfind = Country::where('name', "Zimbabwe")->first();
        if ($countryfind === null) {
        Country::create([
                'name'    => 'Zimbabwe', 
                'prefix' => 'ZWE',
                'country_code' => '+263',
                'iso_code' => 'ZW',
                'order' => '2',
                'active' => true
            ]);
       }else{
            $countryfind->order = 2;
            $countryfind->iso_code = 'ZW';
            $countryfind->save();
        }


    }
}
