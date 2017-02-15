<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 * @package rockmongo
 */

$MONGO = array();
$MONGO["features"]["log_query"] = "on";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

/**
* Configuration of MongoDB servers
*
* @see more details at http://rockmongo.com/wiki/configuration?lang=en_us
*/
$MONGO["servers"][$i]["mongo_options"] = array('replicaSet' => 'REPLICA_NAME');//mongo server name
$MONGO["servers"][$i]["mongo_name"] = "REPLICA_NAME";//mongo server name
$MONGO["servers"][$i]["mongo_host"] = "mongodb://MONGO_HOST";//mongo host
$MONGO["servers"][$i]["mongo_port"] = "false";//mongo port
$MONGO["servers"][$i]["mongo_timeout"] = 0;//mongo connection timeout
$MONGO["servers"][$i]["mongo_auth"] = true;//enable mongo authentication?

$MONGO["servers"][$i]["control_auth"] = true;//enable control users, works only if mongo_auth=false
$MONGO["servers"][$i]["control_users"]["admin"] = "admin";//one of control users ["USERNAME"]=PASSWORD, works only if mongo_auth=false

$MONGO["servers"][$i]["ui_only_dbs"] = "";//databases to display
$MONGO["servers"][$i]["ui_hide_dbs"] = "";//databases to hide
$MONGO["servers"][$i]["ui_hide_collections"] = "";//collections to hide
$MONGO["servers"][$i]["ui_hide_system_collections"] = false;//whether hide the system collections

//$MONGO["servers"][$i]["mongo_sock"] = "/var/run/mongo.sock";//mongo socket path (instead of host and port)
//$MONGO["servers"][$i]["mongo_db"] = "MONGO_DATABASE";//default mongo db to connect, works only if mongo_auth=false
//$MONGO["servers"][$i]["mongo_user"] = "MONGO_USERNAME";//mongo authentication user name, works only if mongo_auth=false
//$MONGO["servers"][$i]["mongo_pass"] = "MONGO_PASSWORD";//mongo authentication password, works only if mongo_auth=false
//$MONGO["servers"][$i]["docs_nature_order"] = false;//whether show documents by nature order, default is by _id field
//$MONGO["servers"][$i]["docs_render"] = "default";//document highlight render, can be "default" or "plain"

$i ++;
?>
