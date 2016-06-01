#include <stdio.h>
#include <unistd.h>

int main()
{
	chdir("/var/www/html");
	system("python simple-https-server.py");
	return 0;
}
