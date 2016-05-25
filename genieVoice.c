#include <stdio.h>
#include <unistd.h>

int main()
{
	if(fork() == 0)
	{
		sleep(1);
		system("chromium-browser https://localhost:7777 --use-fake-ui-for-media-stream --kiosk");
	}
	else
	{
		chdir("/var/www/html");
		system("python simple-https-server.py");
	}
	return 0;
}
