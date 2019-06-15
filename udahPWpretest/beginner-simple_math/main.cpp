#include <iostream>

using namespace std;

int main()
{
    double bekal = 50000, hargamie = 2500;
    int qty, bonus;

    cout << "Beginner: Simple Math" << endl;

    cout << "Anak dibekali ibunya untuk membeli mie: " << bekal<<endl;
    cout << "Harga mie instan: " << hargamie << endl;

    qty = bekal/hargamie;

    cout << "Mie instan yang diperoleh dengan bekal 50000: " << qty<<endl;

    if(qty >= 4){
        bonus = qty + 1;
    }
    cout<<"banyaknya mie instan yang dapat diperoleh "<<bonus + qty<<endl;
    return 0;
}
