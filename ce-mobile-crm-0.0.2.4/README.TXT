***********************************************************************************
*                  CE Mobile CRM (Community Edition Mobile CRM)
*    Is a mobile client based on the hard work from the folks over at
*    jQuery Mobile so please be sure to visit their site at jquerymobile.com
*
*          This file must be included in any re-distribution of the software
*
*                         Initial Code Contributed By:
*                                KDESolutions
*
*
***********************************************************************************

To use the CE CRM Mobile application with your installation of SugarCRM simply copy
the files and folders to a subdirectory underneath your SugarCRM installation. Then
navigate to that subdirectory from your mobile device. You will be prompted for a login
simply login with the same credentials you use for the web based client.

***** NOTE: This program uses whatever protocol is accessed for the file. So if you access
the file by going to http://www.yoursite.com/sugarcrm/mobile/index.html then you will be
sending your information over the interenet unsecure. The password is encoded client side so
it will never be sent in clear text, however you should always use SSL when accessing mobile
applications.

As jquerymobile continues to progress, we will work to incorporate those changes into this application
hopefully this will lead to 1 version for all platforms.

Release 0.0.2.4 Change Log
--- Updated jquery.mobile to 1.0b2 (issue 15)
--- Fixed transition after logging in (issue 16)
--- Fixed logout button
--- Improved login page
--- Fixed missing semicolons
--- Fixed links color on HomePage

Release 0.0.2.3 Change Log
--- Fixed back buttons (issue 4)
--- Fixed LDAP auth (issue 12)
--- Updated jquery.mobile to 1.0b1-20110701 (issue 4)
--- Cleaned project structure

Release 0.0.2.2 Change Log
--- Fixed login failed (issue 5, issue 7)
--- Fixed logout on contact detail page
--- Fixed various typos
--- Improved login page : now using a form to remember inputs and submit on enter key
--- Added .htaccess
--- Improved makefile
--- Fixed "Page keeps refreshing after login" (issue 8)

Release 0.0.2.1 Change Log
--- Fixed bug with hyperlinks not opening correctly.

Alpha 2 Change Log
--- Application re-factored for better performance and to incorporate jQuery Mobile Alpha 3
--- List Views now remember where you were in the list and takes you back to this location until the
    application is closed or refreshed.
--- Detail views no longer require another ajax request for relationships
--- Detail views no long collapse this was done to allow for smoother scrolling and all around better
    performance
--- Application re-factored to scope variables
--- Application re-factored to access object properties using the "." instead of ["property-name"]
--- Format of labels and data changed in details screen to increase usability
--- Empty data fields are no longer displayed in detailed lists reducing the amount of scrolling
    for records that don't have fields populated.
--- Removed unnecessary calls to API if list data hasn't changed
--- Moving back to a detail record after viewing a related record no longer requires a round trip
    to the server
--- Home button added to Detail views for direct navigation
--- Currency now displayed based on currency name and currency amount for details view
    *NOTE List view is coded to work but currently the get_entries method for the REST API
     is not returning it. If this gets resolved the list should show the currency as well.
--- Handling Session timeouts to redirect automatically to the login page
--- Added Log Out menu to main page
