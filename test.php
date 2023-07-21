#include <algorithm>
#include <functional>
#include <iostream>


int main(){
    int a[5] = {5, 2, 1, 8, 7};
    std::sort(a, a+5, std::less<int>());
    int i;
    for(i = 0; i != 5; ++i){
        std::cout << a[i] << " ";
    }
    return 0;
}
