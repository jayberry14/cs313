/********************************************
 * Names: 
 *
 *
 *
 *
 *
 *********************************************/

#include <iostream>
#include <string>

using namespace std;

// Test case examples with username and password
/*  TEST CASE 1:  Username: joshm
                  Password: password1
    TEST CASE 2:  Username: riom
                  Password: pass2
    TEST CASE 3:  Username: michealf
                  Password: Maryhadalittlelambwhosefleecewaswhiteassnow
    TEST CASE 4:  Username: jasonj
                  Password: 234Uj88
    TEST CASE 5:  Username: robbyb
                  Password: trust12
    TEST CASE 6:  Username: cjw
                  Password: jhon2020
    TEST CASE 7:  Username: jamesh
                  Password: helfrichRules101
    TEST CASE 8:  Username: sidneyp
                  Password: AustraliaBoyz
    TEST CASE 9:  Username: kristenm
                  Password: ihatefakepasswords91919191
    TEST CASE 10: Username: barneypurple
                  Password: iloveyouyouloveme
    TEST CASE 11: Username: blakeburn
                  Password: Bernieisthebest12
    TEST CASE 12: Username: mickeyMouse
                  Password: S9SSool91
 */

/**************
 * QUERY GENERATOR for username and password
 * ************/
string qGenerator(string username, string password)
{
  string sqlQuery = "SELECT authenticate FROM users WHERE name='" + username + "' AND password='" + password + "';"; 
  return sqlQuery;
}

/****************
* Test Cases for valid input
****************/
void validInput()
{
  string username[] = {"joshm", "riom", "micheal_f", "jasonj", "robby2b", "cjw", "jamesh", "s2_idneyp", "kristenm", "barneypurple", "blakeburn", "mickeyMouse"};
  string password[] = {"password_1", "pass2" ,"Maryhadalittlelambwhosefleecewaswhiteassnow", "234Uj88", 
                       "trust12", "jhon2020", "helfrich_Rules101", "AustraliaBoyz", "ihatefakepasswords91919191",
                       "iloveyouyouloveme", "Bernieisthebest12", "S9SSool91"};
  // string authenticate[] = {"1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1", "1"}; // sets each username and password to true for testing against false imputs

  for (int i = 0; i < 12; i++)
  {
    string loggedIn = qGenerator(username[i], password[i]); 
    cout << "Test Case Valid Input #" << (i+1) << ":" << endl;
    cout << "Insert username: " << username[i] << endl;
    cout << "Insert password: " << password[i] << endl;
    cout << "Query generateed: " << loggedIn << endl << endl;
  }
}

/****************
* Test Cases for vulnerability: Tautology
****************/
void tautologyAttack()
{
  string username[] = {"joshm", "riom", "jasonj"}; // usernames from test cases
  string attack[] = {"mayberry' OR 'x' = 'x",
                     "mourar' OR 'a' = 'a",
                     "jenkinsj' OR '1' = '1"}; // possible attacks

  for (int i = 0; i < 3; i++)
  {
    string loggedIn = qGenerator(username[i], attack[i]); 
    cout << "Test Case Tautology Attack #" << (i+1) << ":" << endl;
    cout << "Insert username: " << username[i] << endl;
    cout << "Insert password: " << attack[i] << endl;
    cout << "Query generateed: " << loggedIn << endl << endl;
  }
}

/****************
* Test Cases for vulnerability: Union Query
****************/
void unionAttack()
{
  string username[] = {"joshm", "riom", "jasonj"}; // usernames from test cases
  string attack[] = {"mayberryj' UNION SELECT authenticate FROM users",
                     "mourar' UNION SELECT authenticate FROM users",
                     "jenkinsj' UNION SELECT authenticate FROM users"}; // possible attacks

  for (int i = 0; i < 3; i++)
  {
    string loggedIn = qGenerator(username[i], attack[i]); 
    cout << "Test Case Union Query Attack #" << (i+1) << ":" << endl;
    cout << "Insert username: " << username[i] << endl;
    cout << "Insert password: " << attack[i] << endl;
    cout << "Query generateed: " << loggedIn << endl << endl;
  }
}

/****************
* Test Cases for vulnerability: Additional Statement Attack
****************/
void additionalAttack()
{
  string username[] = {"joshm", "riom", "jasonj"}; // usernames from test cases
  string attack[] = {"mayberryj'; INSERT INTO users (name, password) VALUES 'mayberryj', 'myPassword",
                     "mourar'; INSERT INTO users (name, password) VALUES 'admin', 'nimda",
                     "jenkinsj'; DROP TABLE users"}; // possible attacks

  for (int i = 0; i < 3; i++)
  {
    string loggedIn = qGenerator(username[i], attack[i]); 
    cout << "Test Case Additional Statement Attack #" << (i+1) << ":" << endl;
    cout << "Insert username: "  << username[i] << endl;
    cout << "Insert password: "  << attack[i] << endl;
    cout << "Query generateed: " << loggedIn << endl << endl;
  }
}

/****************
* Test Cases for vulnerability: Comment Attack
****************/
void commentAttack()
{
  string attack[] = {"joshm'; --",
                     "riom'; --",
                     "jasonj'; --"}; // possible attacks
  string password[] = {"mayberryj", "mourar", "jenkinsj"}; // passwords from test cases

  for (int i = 0; i < 3; i++)
  {
    string loggedIn = qGenerator(attack[i], password[i]); 
    cout << "Test Case Comment Attack #" << (i+1) << ":" << endl;
    cout << "Insert username: "  << attack[i]     << endl;
    cout << "Insert password: "  << password[i]   << endl;
    cout << "Query generateed: " << loggedIn      << endl << endl;
  }
}

/**************
 * MAIN
 * ************/
int main(int argc, char const *argv[])
{
    validInput();       // call to compare user name and password
    tautologyAttack();  // call to demonstrate the tautology attack
    unionAttack();      // call to demonstrate the union query attack
    additionalAttack(); // call to demonstrate the additional statement attack
    commentAttack();    // call to demonstrate the comment attack
    return 0;
}