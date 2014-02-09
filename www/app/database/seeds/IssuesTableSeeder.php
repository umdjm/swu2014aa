<?php

class IssuesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('issues')->truncate();
		$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi " .
		         "facilisis urna eu lorem sagittis, a sollicitudin dolor " . 
		         "pellentesque. Sed metus mauris, hendrerit quis sem sed, " .
		         "vehicula pulvinar urna. Curabitur sapien ante, commodo " .
		         "in sollicitudin a, auctor ut purus.";
		$annarbor_lat = 42.28052010;
		$annarbor_long = -83.73428100;

 		$issue_bike = new Issue();
		$issue_bike->name = "Abandoned Bike";
		$issue_bike->photo = "/imgs/bike.jpg"; 		
		$issue_bike->desc = $lorem;
		$issue_bike->status = "new";
		$issue_bike->user_id = 2;
		$issue_bike->latitude = $annarbor_lat;
		$issue_bike->longitude = $annarbor_long;
		$issue_bike->priority = rand(1,3);
		$issue_bike->save();

 		$issue_graffiti = new Issue();
		$issue_graffiti->name = "Graffiti on the Wall";
		$issue_graffiti->photo = "/imgs/graffiti.jpg"; 		
		$issue_graffiti->desc = $lorem;
		$issue_graffiti->status = "new";
		$issue_graffiti->user_id = 2;
		$issue_graffiti->latitude = $annarbor_lat;
		$issue_graffiti->longitude = $annarbor_long;
		$issue_graffiti->priority = rand(1,3);
		$issue_graffiti->save();

 		$issue_light = new Issue();
		$issue_light->name = "Light Needs Fixing";
		$issue_light->photo = "/imgs/light.jpg"; 		
		$issue_light->desc = $lorem;
		$issue_light->status = "new";
		$issue_light->user_id = 2;
		$issue_light->latitude = $annarbor_lat;
		$issue_light->longitude = $annarbor_long;
		$issue_light->priority = rand(1,3);
		$issue_light->save();

 		$issue_pothole = new Issue();
		$issue_pothole->name = "Pothole Outside of Dorm";
		$issue_pothole->photo = "/imgs/pothole.jpg"; 		
		$issue_pothole->desc = $lorem;
		$issue_pothole->status = "new";
		$issue_pothole->user_id = 2;
		$issue_pothole->latitude = $annarbor_lat;
		$issue_pothole->longitude = $annarbor_long;
		$issue_pothole->priority = rand(1,3);
		$issue_pothole->save();


 		$issue_mailbox = new Issue();
		$issue_mailbox->name = "Mailbox Super Broken";
		$issue_mailbox->photo = "/imgs/mailbox.jpg"; 		
		$issue_mailbox->desc = $lorem;
		$issue_mailbox->status = "new";
		$issue_mailbox->user_id = 2;
		$issue_mailbox->latitude = $annarbor_lat;
		$issue_mailbox->longitude = $annarbor_long;
		$issue_mailbox->priority = rand(1,3);
		$issue_mailbox->save();

 		$issue_stairway = new Issue();
		$issue_stairway->name = "Stairway Needs Maintenance!";
		$issue_stairway->photo = "/imgs/stairway.jpg"; 		
		$issue_stairway->desc = $lorem;
		$issue_stairway->status = "new";
		$issue_stairway->user_id = 2;
		$issue_stairway->latitude = $annarbor_lat;
		$issue_stairway->longitude = $annarbor_long;
		$issue_stairway->priority = rand(1,3);
		$issue_stairway->save();


		// Uncomment the below to run the seeder
		// DB::table('issues')->insert($issues);
	}

}
