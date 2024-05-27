#include <iostream>
#include <string>

void fill(std::string& cup) {
    cup = "full";
}

int main() {
    std::string cup = "empty";
    fill(cup);
    std::cout << cup;
    return 0;
}