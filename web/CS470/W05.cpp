#include <iostream>
#include <fstream>
#include <string>
#include <stdio.h>
#include <unistd.h>
#include <vector>
#define GetCurrentDir getcwd

using namespace std;

// path for password.txt is /home/mou17006/secret/topSecret/password.txt
// path for allowed.txt is /home/mou17006/secret/topSecret/allowed.txt
// Absolute path looks like this-> C:\Users\dakin\cs313-php\web\Personal\w2\rideshare.php
// Relative path looks like this-> web\Personal\w2\rideshare.php

vector<string> canonicalization(string encoding)
{
    //Write parsing code here
    vector <string> cleanPath;
    string temp = "";
    for (int i = 0; i < encoding.size(); i++) 
    {
        if (encoding[i] != '/')
        {
            temp += encoding[i];
            i++;
            while (encoding[i] != '/' && i < encoding.size())
            {
                temp += encoding[i];
                i++;
            }
            cleanPath.push_back(temp);
            temp.clear();
        }
    }

    return cleanPath;
}

bool isHomograph(string userDir, string forbiddenPath)
{
    vector<string> forbiddenV = canonicalization(forbiddenPath);
    vector<string> userV = canonicalization(userDir);
    vector<string> tempDir;

    vector<string> :: iterator forbIter = forbiddenV.begin();
    vector<string> :: iterator userIter = userV.begin();

    for(userIter; userIter < userV.size(); userIter++)
    {
        if(*userIter == ".")
        {
            userV.erase(userIter);
            userIter++;
        }

        if(*userIter == "..")
        {
            userV.erase(userIter);
            userIter--;
            userV.erase(userIter);
            userIter++;
        }
        
        for (i = 0; i < userV.size(); i++)
        {
            cout << userV[i] << endl;
        }
        
        // if(cleanPath.back() == )
    }

    return true;
}

int main(int argc, char const *argv[])
{
    string input; 
    string forbiddenPath = "/home/mou17006/secret/password.txt";
    string userDir = GetCurrentWorkingDir();
    cout << "Enter file path: ";
    cin >> input;
    
    //appending the input to the user current directory
    userDir += input;
    cout << "Checking to see if file path is a homograph of the forbidden path...";
    if (isHomograph(userDir, forbiddenPath))
    {
        cout << "They are homographs!";
    }
    else
    {
        cout << "They are not homographs!";
    }

    return 0;
}





/***************************************************************************************************/
//CURRENT WORKING DIRECTOR GETTER FUNCTION
//CREDITED FROM : http://www.codebind.com/cpp-tutorial/c-get-current-directory-linuxwindows/

string GetCurrentWorkingDir(void) { //Returns the Absolute Path
    char buff[FILENAME_MAX];
    GetCurrentDir(buff, FILENAME_MAX);
    string current_working_dir(buff);
    return current_working_dir;
}
 
/* EXAMPLE OF HOW TO USE GetCurrentWorkingDir
int main(){
   string path;
   path = GetCurrentWorkingDir();
   std::cout << path << std::endl;
   return 0;
}*/
/****************************************************************************************************/