How to use
------------

If you don't want to include the git deployer in your project pushes don't forget to add `` git-deployer ``  and `` pull.sh `` to the .gitignore file

The final step is to login into your GitHub account,
then from there go to;

``Repository Settings -> Service Hooks -> WebHook URLs`` 

add 

`` http://domain.com/git-deployer/hook.php ``

whenever you do a ``commit -> push`` to GitHub, your server will automatically fetch the latest changes.


By default all WebHook calls will be logged if you wish to disable this functionality just open *hook.ph*p and set ```LOG_WEBHOOK``` to ````false```.

Cheers :-)

