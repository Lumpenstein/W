<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
            
                // API REQUESTS
		['POST', '/api/login/', 'ApiUser#login', 'apiUser_login'],
		['POST', '/api/createUser/', 'ApiUser#createUser', 'apiUser_createUser'],
		['POST', '/api/profile/[i:id]/', 'ApiUser#getProfile', 'apiUser_getProfile']
	);