#include <iostream>

using namespace std;

int main()
{
    int angka, mod;
    cout << "Beginner segitiga siku siku bilangan prima" << endl;

    cout << "masukan angka: ";
    cin>>angka;

    for(int tinggi=1;tinggi<=angka;tinggi++){
        for(int alas=1;alas<=tinggi;alas++){
            cout<<alas<<" ";
        }
        cout<<endl;
    }

   /* for(int i=1; i<=angka; i++){
        mod = 1;
        for(int j=1; j<10; j++){
            cout<<j;
        }
        cout<<endl;
    } */
    return 0;
}
