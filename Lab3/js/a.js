/* // CODE IN C++
#include <cstdio>
#include <vector>
using namespace std;

typedef vector<int> vi;

int n1, n2, k, m;
vi A;
vi B;
bool valid() {
	if(A[k - 1] < B[n2 - m]) return true;
	return false;
}

int main() {
	scanf("%d %d", &n1, &n2);
	scanf("%d %d", &k, &m);

	A.resize(n1);
	B.resize(n2);
	for(int i = 0; i < n1; i++) {
		scanf("%d", &A[i]);
	}
	for(int i = 0; i < n2; i++) {
		scanf("%d", &B[i]);
	}
	if(valid()) printf("YES\n");
	else printf("NO\n");

	return 0;
}


*/

function a() {
    read = prompt("n1 n2", "");
    ns = read.split(" ");
    read = prompt("k m", "");
    km = read.split(" ");
    read = prompt("A", "");
    A = read.split(" ");
    read = prompt("B", "");
    B = read.split(" ");
    if(A[km[0] - 1] * 1 < B[ns[1] - km[1]]) window.alert("YES");
    else window.alert("NO");    
}
