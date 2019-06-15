#include <iostream>

using namespace std;

int main()
{
    int angka, a, b;
    cout << "Beginner segitiga siku siku bilangan prima" << endl;

    cout << "masukan angka: ";
    cin>>angka;

    for(a=1;a<=angka;a++){
        for(b=1;b<=a;b++){
            cout<<b<<" ";
        }
        cout<<endl;
    }
    return 0;
}
