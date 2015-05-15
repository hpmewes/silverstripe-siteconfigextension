<?php

class SiteConfigExtension extends DataExtension
{

    private static $db = array(
        'Company' => 'Varchar',
        'SiteOwner' => 'Varchar',
        'Street' => 'Varchar',
        'HouseNumber' => 'Varchar',
        'Zipcode' => 'Varchar',
        'Destination' => 'Varchar',
        'Lat' => 'Varchar',
        'Lng' => 'Varchar',
        'Email' => 'Varchar',
        'Phone' => 'Varchar',
        'Mobile' => 'Varchar',
        'Fax' => 'Varchar',
        'Twitter' => 'Varchar',
        'Facebook' => 'Varchar',
        'Google' => 'Varchar',
        'Message' => 'HTMLText'
    );

    private static $has_one = array(
        'Logo' => 'Image',
    );

    public function updateCMSFields(\FieldList $fields)
    {
        $tabTitle = _t('SiteConfigExtension.TABSITEINFO', "Site Infos");

        // add a Logo to whole sites
        $fields->addFieldToTab('Root.'.$tabTitle, new UploadField('Logo', _t('SiteConfigExtension.LOGO', 'Logo')));

        $latField = new TextField('Lat', _t('SiteConfigExtension.LATITUDE', 'Latitude'));
        $lngField = new TextField('Lng', _t('SiteConfigExtension.LONGITUDE', 'Longitude'));
        $lngField->setDescription(_t('SiteConfigExtension.GEOINFO','Get latitude & longitude values here: <a href="http://itouchmap.com/latlong.html" target="_blank">itouchmap.com</a>.'));

        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Company', _t('SiteConfigExtension.COMPANY', 'Company')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('SiteOwner', _t('SiteConfigExtension.SITEOWNER', 'Owner')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Street', _t('SiteConfigExtension.STREET', 'Street')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('HouseNumber', _t('SiteConfigExtension.HOUSENUMBER', 'Housenumber')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Zipcode', _t('SiteConfigExtension.ZIPCODE', 'Zipcode')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Destination', _t('SiteConfigExtension.DESTINATION', 'City')));
        $fields->addFieldToTab('Root.'.$tabTitle, $latField);
        $fields->addFieldToTab('Root.'.$tabTitle, $lngField);

        $fields->addFieldToTab('Root.'.$tabTitle, new EmailField('Email', _t('SiteConfigExtension.EMAIL', 'Email')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Phone', _t('SiteConfigExtension.PHONE', 'Phone')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Mobile', _t('SiteConfigExtension.MOBILE', 'Mobile')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Fax', _t('SiteConfigExtension.FAX', 'Fax')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Twitter', _t('SiteConfigExtension.TWITTER', 'Twitter')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Facebook', _t('SiteConfigExtension.FACEBOOK', 'Facebook')));
        $fields->addFieldToTab('Root.'.$tabTitle, new TextField('Google', _t('SiteConfigExtension.GOOGLE', 'Google+')));

        $fields->addFieldToTab('Root.'.$tabTitle, new HtmlEditorField('Message', _t('SiteConfigExtension.MESSAGE', 'Message')));

    }

}
