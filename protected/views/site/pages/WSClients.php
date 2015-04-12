<?php
$this->pageTitle=Yii::app()->name . ' - WebService Clients';
$this->breadcrumbs=array(
	'WebService Clients',
);
?>
<h1>WEBSERVICE CLIENTS</h1>

<div>
    <h2>PHP <?php echo CHtml::link(CHtml::encode('(demo)'), array('page', 'view'=>'PHPClient')); ?></h2>
    <pre>
        ini_set('soap.wsdl_cache_enabled',0);
        $wsTestClient = new SoapClient('http://server/webapp/path/to/webservice');
        $aWSFunctions = $wsTestClient->__getFunctions();
        foreach ($aWSFunctions as $oWSFunction) {
            CVarDumper::dump($oWSFunction);
            <?php echo Chtml::encode("echo '<p/><br/>';"); ?><br>
        }
    </pre>
</div>
<hr>
<div>
    <h2>Windows PowerShell</h2>
    <pre>
        PS C:\> $wsClient = New-WebServiceProxy -Uri http://server/webapp/path/to/webservice
        PS C:\> $wsClient | Get-Member
    </pre>
</div>
<hr>
<div>
    <h2>Ruby</h2>
    <pre>
        require 'savon'

        # create a client for the service
        client = Savon.client(wsdl: 'http://server/webapp/path/to/webservice')

        print client.operations
        # => [:find_user, :list_users]
    </pre>
</div>
