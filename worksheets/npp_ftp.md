#### Working remotely on the server using Notepad++
To add the NppFTP plugin in Notepad++
- click on the Plugins menu
- click on the Plugins Admin...
- in Available panel search for NppFTP
- select it
- click on Install button

Once it is installed it will appear as a menu item in the Plugins menu. When you click on it, it will give you several options to select
- click on Show NppFTP Window

A new panel will open with a set of icons at the top:
- click on the cog (second last icon) and select Profile settings
- click the Add new button (at the bottom of Profiles:)
- enter the name of your choice when prompted and click OK
- note that the newly-created profile is selected (if not, make sure you select it by clicking on it)
- enter Hostname: dev.fast.sheridanc.on.ca
- select Connection type: SFTP
- default port should be 22 (change if it is not - but make sure you have chosen SFTP, the other choices default to other ports)
- enter Username: same as cPanel and FileZilla
- enter Password: same as cPanel and FileZilla 
- leave rest as is.

Once you have profile(s) set up, the link icon (first one) drops down with a menu item for each profile that you have set up.
- click on the menu item and wait for the connection
- when the connection is successful, the panel will fill with the directory tree on the server, just like in FileZilla
- when the connection is unsuccessful, the issues are the same as in FileZilla (check all information in your profile, if it works in FileZilla, you can make it work here)

Using Notepad++ 
- navigate to public_html and to the location where you want to create a file, or where you already have a file
- to create a new file, right-click on the directory (folder) where you want to store the file and select the option **Create new file**, name it when prompted (remember PHP files must have an extension *php*) 
- to name a file use the same conventions as before, for example `file.php`, `myFile.php`, `any_name.php`
- once the file is created, find it in the listing and double-click on it (note the Download... message in the bottom panel and the file opens in the Notepad++ panel)
- try adding some code and then save the file (like before, using the File menu or the Save icon) - note the Upload... message in the bottom panel
- to test your page, open a browser window and enter your Web URL with the path and file name (http://username.dev.fast.sheridanc.on.ca/path/file.php)


