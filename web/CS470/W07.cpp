/***********************************************
 * Names:
 * Rio Moura
 * CJ Waisath
 * Robby Breidenbaugh
 * Josh Mayberry
 * Jason Jenkins
 * Michael Flindt
 *********************************************/
#include <iostream>
#include <iomanip>
#include <cassert>
using namespace std;

void one(long number);
void two(long number);
void pass() { cout << "You pass :)\n"; }
void fail() { cout << "You've failed :(\n"; }
const char * passMessage = ":)";
const char * failMessage = ":(";

/**********************************************
 * MAIN : The top of the callstack.
 **********************************************/
int main()
{
   char text[8] = "*MAIN**";
   long number = 123456;
   void (*pointerFunction)() = fail;
   const char * message = failMessage;

   // display the initial values of the local variables
   cout << "main() : " << (void *)main << endl;
   cout << "\ttext:             " << text              << endl;
   cout << "\tnumber:           " << number            << endl;
   cout << "\tmessage:          " << message           << endl;
   cout << "\tfunction pointer: ";
   pointerFunction();

   // call the other functions
   one(number + 111111);     // 234567

   // display the new values of the local variables
   cout << "main() - after\n";
   cout << "\ttext:             " << text              << endl;
   cout << "\tnumber:           " << number            << endl;
   cout << "\tmessage:          " << message           << endl;
   cout << "\tfunction pointer: ";
   pointerFunction();

   return 0;
}

/************************************************
 * CONVERT TO STRING
 * Convert the data from p into a human-readable string
 * by removing all the unprintable characters and replacing
 * them with a dot
 ***********************************************/
string displayCharArray(const char * p)
{
   string output;
   for (int i = 0; i < 8; i++)
       output += string(" ") + (p[i] >= ' ' && p[i] <= 'z' ? p[i] : '.');
   return output;
}

/************************************************
 * REPLACE ALL CHARACTERS
 * Converts all given characters to their specified
 * new character
 ***********************************************/
size_t strReplaceAll(char *s, int oldc, int newc) {
   size_t count = 0; 
   for(*s ;*s != '\0'; s++)
   { 
      if(*s == oldc)
      { 
         *s = newc; 
         count++;
      }
   }
   return count; 
}
/**********************************************
 * ONE : The next item on the call stack
 **********************************************/
void one(long number)               // 234567
{
   char text[8] = "**ONE**";

   cout << "one() : " << (void *)one << endl;
   cout << "\tmessage: " << (void *)failMessage << endl;
   cout << "\tfail():  " << (void *)fail        << endl;

   two(number + 111111);    // 345678
}

/**********************************************
 * TWO : The bottom of the call stack
 **********************************************/
void two(long number)              // 345678
{
   // start your display of the stack from this point
   long bow = number + 111111;     // 456789
   char text[8] = "**TWO**";
   long * pLong = NULL;
   char * pChar = NULL;

   // header for our table. Use these setw() offsets in your table
   cout << '[' << setw(2) << 'i' << ']'
        << setw(15) << "address"
        << setw(20) << "hexadecimal"
        << setw(20) << "decimal"
        << setw(18) << "characters"
        << endl;
   cout << "----+"
        << "---------------+"
        << "-------------------+"
        << "-------------------+"
        << "-----------------+\n";
   for (long i = 30; i >= -4; i--) // loops through index
   {
      cout << '[' << setw(2) << dec << i << ']'
           << setw(15) << &bow + i
           << setw(20) << hex << *(&bow + i)
           << setw(20) << dec << *(&bow + i)
           << setw(18) << displayCharArray((char *)(&bow+i))
           << endl;
   }

   // Insert code here to change the variables in main()

   // change pointerFunction in main() to point to pass
   long *p;
   for (p = (long*)&p; *p !=(long)fail; p++)
   {
      ;
   }
   assert(*p == (long)fail);
   (*p) = (long)pass;
   assert(*p == (long)pass);

   //change message in main() to point to passMessage
   --p;
   assert(*p == (long)failMessage);
   *p = (long)passMessage;
   assert(*p == (long)passMessage);

   // change text in main() to "*main**"
   --p;
   assert(*p == 11868464746679594);
   strReplaceAll((char *)p, 'M', 'm');
   strReplaceAll((char *)p, 'A', 'a');
   strReplaceAll((char *)p, 'I', 'i');
   strReplaceAll((char *)p, 'N', 'n');

   // change number in main() to 654321
   p += 3;
   assert(*p == 123456);
   *p = 654321;
}