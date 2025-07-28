# World-Charts-Website
A website that shows the top 20 countries in terms of Life Expectancy, Population and Surface Area(in kilometers).

This website was made for the subject of Distributed Applications.

# Before you start you'll need:
-XAMPP (for the database)
-A web browser (any web browser works)
-Little knowledge about databases (most of it will be explained by me don't worry).

# Step 1: XAMPP
1. Open XAMPP Control Panel (if you don't have XAMPP you can download it at https://www.apachefriends.org/download.html);
2. Once the Control Panel is open, click `Start` on both Apache and MySQL
3. Make sure both Apache and MySQL are running (if everything goes well you will see the status of both as `Running` in green, if they don't, something went wrong!)

# Step 2: Setting up the World database (the most important part!)
1. In XAMPP, click the `Admin` button next to MySQL. This opens phpMyAdmin in your browser
2. Create a new database:
   - Click `New` on the left side
   - Give it a name like `world_stats` or whatever name you prefer
   - Click `Create`
3. Import my database file:
   - Click on your new database to select it
   - Go to the the `Import` tab at the top
   - Click `Choose File` and find the `world.sql` file in the php folder
   - Click `Go` and wait for it to finish (this might take a minute)

# Step 3: Getting the php files in the right place:
1. Find where XAMPP is installed on your computer
2. Go to the `htdocs` folder (on Windows it's usually `C:\xampp\htdocs`)
3. Copy ALL the PHP files from my project's `php` folder into `htdocs`
4. Make sure these files are there:
   - The database connection file
   - All the scripts that get data from the database
   - The files that make the website work
  
# Step 4: Using the website:
Double check if you did every single one of the previous steps, afterwards there are two ways of doing this

1st way -> Simply go to the project folder and click on `index.html` and the website will open on your preferred browser.

2nd way -> Type `http://localhost/[your-project-folder-name]` in the address bar and press enter.

# If there is any error like the charts are not loading, or the server cannot be found check the troubleshooting section at the end of this file!

# The website will present you with the top 20 countries from each continent in three different categories:
- Most populated
- Biggest life expectancy
- Area in kilometers square

You can choose which continent you want to check on the top of the website where it says `Select Continent:`, and even see the precise numbers just by hovering your mouse over the charts.

# Troubleshooting

### If by any chance anything goes wrong, you will have the answers you´ll need in this section
1. **"Database connection failed" or similar error**
   - Check if MySQL is actually running in XAMPP (should be green)
   - Look at the connection.php file and make sure the database name matches what you created
   - Maybe you didn't import the world.sql file properly? Try doing it again

2. **"Charts not loading" or the page looks broken**
   - Open the browser console (F12) and see if there are any red error messages
   - Double-check that you put all the PHP files in the htdocs folder
   - Make sure Apache is running in XAMPP

3. **"Page not found" or localhost doesn't work**
   - Check that you're typing the right URL (http://localhost/your-folder-name)
   - Make sure all your project files are actually in the htdocs folder
   - Apache needs to be running on port 80 (this is usually automatic)

## What I used to build this
- **Server**: Apache (comes with XAMPP)
- **Database**: MySQL (also comes with XAMPP)
- **Backend**: PHP (for getting data from the database)
- **Frontend**: HTML, CSS, JavaScript
- **Charts**: Highcharts library (`https://code.highcharts.com/highcharts.js`)




