#include <stdio.h>
#include <stdlib.h>



void main() {
	char a[21];
	int b;
	int i;
	printf ("eneter the username:=\n");
	gets(a);
    printf("the username is %s\n",a);
    
    printf("enetr the pass id\n");
    scanf("%d",&b);
    printf("the id is %d\n",b);
    
	if ((strcmp(a,"Admin")==0)&& b==897){
    	printf("ACCESS GRANTED\n");
    	
	}
	else{
		printf ("This is for admin motherfucker\n");
	}
	
	
}
