#include <stdio.h>

typedef enum { EMPTY, FULL } CupState;

void fill(CupState *cup) {
    *cup = FULL;
}

int main() {
    CupState cup = EMPTY;
    fill(&cup);

    if (cup == FULL) {
        printf("full\n");
    } else {
        printf("empty\n");
    }

    return 0;
}