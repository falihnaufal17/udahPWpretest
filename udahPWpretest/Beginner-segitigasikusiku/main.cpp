#include <iostream>

using namespace std;

int main()
{
    int angka,x, a, b;
    int prima[9] = {2,3,5,7,11,13,17,23,31};
    cout << "Beginner segitiga siku siku bilangan prima" << endl;

    cout << "Masukan Angka: ";
    cin >> angka;

    for(a=0; a<=angka; a++){
        x=0;
        for(b=0;b<a;b++){
            cout<<prima[b]<<" ";
        }

        if(x == 2){
            cout<<a;

        }
        //cout<<a;
        cout<<endl;
    }
    return 0;
}
