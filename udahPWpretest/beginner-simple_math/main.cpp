#include <iostream>

using namespace std;

int main()
{
    double bekal = 50000, hargamie = 2500;
    int qty, bonus, sisa, hasil;

    cout << "Beginner: Simple Math" << endl;

    cout << "Anak dibekali ibunya untuk membeli mie: " << bekal<<endl;
    cout << "Harga mie instan: " << hargamie << endl;

    qty = bekal/hargamie;

    cout << "Mie instan yang diperoleh dengan bekal 50000: " << qty<<endl;

    sisa = qty % 4;
    bonus = (qty - sisa)/4;
    hasil = qty + bonus;

    cout<<"banyaknya mie instan yang dapat diperoleh "<<hasil<<endl;
    return 0;
}
