#include <stdio.h>
#include <linux/unistd.h>

#define save()					syscall(391, 1, NULL)
#define load()					syscall(392, 1, NULL)
#define checkCommand(command)			syscall(393, command, NULL)
#define setDevice(dev_name)			syscall(394, dev_name, NULL)
#define setCommand(dev_name, dev_command)	syscall(395, dev_name, dev_command)
#define setPid(pid)				syscall(396, pid)
#define devState(dev_num, state)		syscall(397, dev_num, state)

#define NUM_TOKEN 10

int main(int argc, char *argv[])
{
	int ret;
	int tmp;
	switch(argv[1][0])
	{
		case '1':
			save();
			break;
		case '2':
			load();
			tmp =0;
			while((ret=devState(tmp,-1)) >=0)
			{
				tmp++;
			}
			break;
		case '3':
			checkCommand(argv[2]);
			break;
		case '4':
			setDevice(argv[2]);
			break;
		case '5':
			setCommand(argv[2], argv[3]);
			break;
		case '6':
			setPid(atoi(argv[2]));
			break;
		case '7':
			ret = checkCommand(argv[2]);
			devState(ret / NUM_TOKEN, ret%NUM_TOKEN);
			break;
		default:
			return -1;
	}
	return 1;
}
