# World-Charts-Website
A website that shows the top 20 countries in terms of Life Expectancy, Population and Surface Area(in kilometers).

This website was made for the subject of Distributed Applications.

# Before you start you'll need:
-XAMPP (for the database);
-A web browser (any web browser works);
-Little knowledge about databases (most of it will be explained by me don't worry).

# Step 1: XAMPP
1. Open XAMPP Control Panel (if you don't have XAMPP you can download it at https://www.apachefriends.org/download.html);
2. Once the Control Panel is open, click "Start" on both Apache and MySQL;
3. Make sure both Apache and MySQL are running (if everything goes well you will see the status of both as "Running" in green, if they don't, something went wrong!)

# Step 2: Setting up the World database (the most important part!)
1. In XAMPP, click the "Admin" button next to MySQL. This opens phpMyAdmin in your browser
2. Create a new database:
   - Click "New on the left side
   - Give it a name like "world_stats" or whatever name you prefer
   - Click "Create"
3. Import my database file:
   - Click on your new database to select it
   - Go to the the "Import" tab at the top
   - Click "Choose File" and find the "world.sql" file in the php folder
   - Click "Go" and wait for it to finish (this might take a minute)

