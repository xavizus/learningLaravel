<?php
error_reporting(-1);
ini_set("display_errors", 1);
// basic sequence with LDAP is connect, bind, search, interpret search
// result, close connection

echo "<h3>LDAP query test</h3>";
echo "Connecting ... <br>";
$ds=ldap_connect("xav-p-dc01.xavizus.com");  // must be a valid LDAP server!
ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
echo "connect result is " . $ds . "<br />";
error_log(print_r($ds,true));
if ($ds) {
    echo "Binding ...";
    $r=ldap_bind($ds, 'LDAP-creds', 'YLc6RHTPWqiImUp1Ysfd');     // this is an "anonymous" bind, typically
                           // read-only access
    echo "Bind result is " . $r . "<br />";

    echo "Searching for (sn=S*) ...";
    // Search surname entry
    $sr=ldap_search($ds, "OU=Xavizus,DC=xavizus,DC=com ", "(&(sAMAccountName=*)(!(objectClass=computer))(|(objectClass=person)(objectClass=user)))");
    echo "Search result is " . $sr . "<br />";

    echo "Number of entries returned is " . ldap_count_entries($ds, $sr) . "<br />";

    echo "Getting entries ...<p>";
    $info = ldap_get_entries($ds, $sr);
    echo "Data for " . $info["count"] . " items returned:<p>";

    for ($i=0; $i<$info["count"]; $i++) {
        echo "dn is: " . $info[$i]["dn"] . "<br />";
        echo "first cn entry is: " . $info[$i]["cn"][0] . "<br />";
        $mail = isset($info[$i]["mail"][0]) ? $info[$i]["mail"][0] : 'none';
        echo "first email entry is: " . $mail . "<br /><hr />";
    }

    echo "Closing connection";
    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
