<?php
class SiteConfigExtension extends DataExtension {
    
    private static $db = array(
        'Street'        => 'Varchar',
        'HouseNumber'   => 'Varchar',
        'Zipcode'       => 'Int(5)',
        'Destination'   => 'Varchar',
        'lat'           => 'Varchar',
        'lng'           => 'Varchar',
        'Email'         => 'Varchar',
        'Phone'         => 'Varchar',
        'Twitter'       => 'Varchar',
        'Facebook'      => 'Varchar'
    );
    
    private static $has_one = array(
        'Logo'          => 'Image',
    );
    
    public function updateCMSFields(\FieldList $fields) {       
        // add a Logo to whole sites
        $fields->addFieldToTab('Root.Main', new UploadField('Logo', 'Logo'));
        
        $latField = new TextField('lat', 'Latitude');
        $lngField = new TextField('lng', 'Longitude');
        $lngField->setDescription('Die Werte für Latitude und Longitude können von <a href="http://itouchmap.com/latlong.html" target="_blank">itouchmap.com</a> ermittelt werden');
        
        $fields->addFieldToTab('Root.Main', new TextField('Street', 'Strasse'), 'Theme');
        $fields->addFieldToTab('Root.Main', new TextField('HouseNumber', 'Hausnummer'), 'Theme');
        $fields->addFieldToTab('Root.Main', new TextField('Zipcode', 'Postleitzahl'), 'Theme');
        $fields->addFieldToTab('Root.Main', new TextField('Destination', 'Ort'), 'Theme');
        $fields->addFieldToTab('Root.Main', $latField, 'Theme');
        $fields->addFieldToTab('Root.Main', $lngField, 'Theme');
        
        $fields->addFieldToTab('Root.Main', new EmailField('Email', 'Email Adresse'), 'Theme');
        $fields->addFieldToTab('Root.Main', new TextField('Phone', 'Telefonnummer'), 'Theme');
        $fields->addFieldToTab('Root.Main', new TextField('Twitter', 'Twitter Link'), 'Theme');
        $fields->addFieldToTab('Root.Main', new TextField('Facebook', 'Facebook Link'), 'Theme');
    }
    
}
?>
