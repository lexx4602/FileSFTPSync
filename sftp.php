#$connection = ssh2_connect('85.142.20.106', 22);
#ssh2_auth_password($connection, '18dep', 'ltg18ljcneg');

<?php
include('Net/SFTP.php');
include('class.Logging.php');
include ('config.php');





define('NET_SFTP_LOGGING', NET_SFTP_LOG_COMPLEX);

$sftp = new Net_SFTP($RemoteServer);
if (!$sftp->login($SFTPLogin, $SFTPPassword)) {
    exit('Login Failed');
}


$files = $sftp->nlist($rootdir);
#echo $sftp->pwd();
foreach ($files as $file) {
#$files1=$sftp->nlist("FromBUH"); 

if ($sftp->is_dir($rootdir.$file)) {

    
    
    
    
echo "D ".$file." \n";
    
    
    
}
else {

    
    
 echo "f ".$rootdire.$file."\n";
    
    
    
    
}

}            


#print_r($files);
#$curdir=$files['0'];
#$sftp->chdir("$curdir");

#$files = $sftp->nlist();

#print_r($sftp->nlist()); // == $sftp->nlist('.')
#print_r($sftp->rawlist("FromBUH/")); // == $sftp->rawlist('.')

#echo $sftp->getSFTPLog();
?>


