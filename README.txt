Tyler Kemme
tpkemme@gmail.com

You will need:
• The VMware Player:
http://www.vmware.com/products/player/
• The project image:
http://www.cs.utexas.edu/~shmat/courses/cs361s/cs361s-proj1.tgz
1. Download both the VMware Player and the project tarball. Uncompress the tarball
and run the vm with VMware Player.
2. If VMware Player asks whether you moved or copied the image, say that you copied
it.
3. The machine has two accounts: root/root and user/user. You will do your work as
user, but feel free to explore as root.
The vm is configured to use NAT for networking. From the vm, you can type ifconfig
as root to see the IP address of the vm. It should be listed in the field inet addr: under
eth0.
The vm also has an SSH server. You can SSH into the vm from your machine, using the
IP address produced by ifconfig (see above) as the destination. You can also use this to
transfer files into the vm using scp. Alternatively, inside the vm, you can fetch files directly
from the Web using wget.
Some attacks will require an email to be sent to user on the system. You will need a
server-side script to automatically email information captured by your client-side JavaScript.
We have provided this script for you at http://hackmail.org/sendmail.php (open this
URL from within the vm for more instructions) and use that URL in your attack scripts to
send emails. Any mail the user receives will appear in /var/mail/user.

UT Payroll
UT Payroll is all about making sure people get paid while doing the least amount of work
possible. To that end, they’ve created a Web application that lets you set up your direct
deposit information, replacing the six hardcopy forms they had previously. Because they
find themselves frequently looking up the name attached to a UT EID, they have included
that functionality as well.
The UT Payroll server is located at this URL (accessible only from within the vm):
http://payroll.utexas.edu
You can create a new account by registering on the main page. You can then save your
account number and routing number (this should be obvious, but please please please do
not save your actual banking information, or use your actual UT Direct password when
registering).
You can view any registered user’s name by looking up their UT EID on the right.
The source code of the Payroll website is available within the vm in /var/payroll/www

Creates a malicious HTML page that works as follows. Suppose the victim has logged
into the UT Payroll server, and, while still logged in, visits your HTML page. This page
overwrites the victim’s account number and routing number stored on the UT Payroll
server with the values: 3133731337 and 1000000001 respectively.

Instead of redirecting the victim as described in the previous paragraph, the attack is now
transparent to the victim. In this case, the victim should see only the URL and content
of the malicious HTML page. For example, the victim is browsing his favorite forum and
sees the link promising a cute picture of a kitten. He clicks the link, sees the kitten, nods
appreciatively, then closes the tab, unaware that his data at UT Payroll has been modified.