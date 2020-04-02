###############################################################
# Program:
#     CS470, Week 12
#	  Brother Helfrich
# Author:
#     Josh Mayberry
# Summary:
#         
###############################################################

###############################################################
# Build the main game
###############################################################
a.out: 
	g++ lab12.o control.o interact.o message.o messages.o

###############################################################
# Individual files
#    To be added later
###############################################################
lab12.o: lab12.cpp interact.h messages.h
	g++ -c lab12.cpp

control.o: control.cpp control.h
	g++ -c control.cpp

interact.o: interact.cpp interact.h message.h control.h
	g++ -c interact.cpp

message.o: message.cpp message.h 
	g++ -c message.cpp

messages.o: messages.cpp messages.h control.h message.h
	g++ -c messages.cpp

###############################################################
# General rules
###############################################################
clean:
	rm a.out *.o
