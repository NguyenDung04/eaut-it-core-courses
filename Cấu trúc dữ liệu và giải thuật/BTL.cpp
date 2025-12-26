#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// Dinh nghia cau truc cua mot mut trong danh sach lien ket
struct Node {
    int data;
    struct Node* next;
};

// Khai bao con tro den nut dau tien trong danh sach lien ket
struct Node* danhSach = NULL;

// Bien danh dau cho viec tim thay cap so nhan
int foundCapSoNhan = 0;
int capSoNhanA, capSoNhanB, capSoNhanC;

// Ham de kiem tra xem mot so co phai la so nguyen to hay khong
int laSoNguyenTo(int n) {
    if (n <= 1)
        return 0;
    if (n <= 3)
        return 1;
    if (n % 2 == 0 || n % 3 == 0)
        return 0;
    for (int i = 5; i * i <= n; i += 6) {
        if (n % i == 0 || n % (i + 2) == 0)
            return 0;
    }
    return 1;
}

// Ham de tinh trung binh nhan cac so chan, duong, chia het cho 5
float tinhTrungBinhNhan() {
    int tich = 1;
    int dem = 0;
    struct Node* current = danhSach;
    while (current != NULL) {
        if (current->data % 2 == 0 && current->data > 0 && current->data % 5 == 0) {
            tich *= current->data;
            dem++;
        }
        current = current->next;
    }
    if (dem > 0) {
        return (float)tich / dem;
    } else {
        return -1; // Khong co so nao phu hop.
    }
}

// Ham de kiem tra xem danh sach co 3 phan tu lien tiep là cap so nhan hay khong
int kiemTraCapSoNhan() {
    if (danhSach == NULL || danhSach->next == NULL || danhSach->next->next == NULL)
        return 0; // Danh sach khong du phan tu de kiem tra

    struct Node* current = danhSach;

    while (current->next->next != NULL) {
        int a = current->data;
        int b = current->next->data;
        int c = current->next->next->data;

		// Kiem tra xem a, b, c tao thanh cap so nhan khong
        if (b != 0 && (float)b / a == (float)c / b) {
            foundCapSoNhan = 1; // Danh dau da tim thay cap so nhan
            capSoNhanA = a;
            capSoNhanB = b;
            capSoNhanC = c;
            return 1; // Co cap so nhan cua 3 phan tu lien tiep
        }
        current = current->next;
    }
    return 0; // Khong co cap so nhan.
}

// Ham de them mot so vao dau danh sach lien ket
void themSoVaoDau(int num) {
    struct Node* new_node = (struct Node*)malloc(sizeof(struct Node));
    new_node->data = num;
    new_node->next = danhSach;
    danhSach = new_node;
}

int danhSachRong () {
	return danhSach == NULL;
}

int main() {
    int luaChon;
    while (1) {
        printf("========= MENU =========\n");
        printf("1. Khoi tao danh sach \n");
        printf("2. Tinh trung binh nhan cua cac so nguyen, duong, chia het cho 5 \n");
        printf("3. Sap xep danh sach theo thu tu tang dan \n");
        printf("4. Kiem tra cap so nhan cua 3 phan tu lien tiep \n");
        printf("5. Kiem tra so nguyen o vi tri thu 5 \n");
        printf("0. Thoat \n");
        printf("Nhap lua chon cua ban: ");
		scanf("%d", &luaChon);
		
		system("cls");

        switch (luaChon) {
            case 1:
            	// Nhap cac so va them vao danh sach lien ket
                danhSach = NULL; // Dat danh sach vao lien ket rong
                printf("Nhap cac so nguyen (An # de dung): \n");
                while (1) {
                    char input_str[10]; // Khai bao 1 mang de nhap chuoi
                    scanf("%s", input_str); // Doc mot chuoi tu nguoi dung
                    if (strcmp(input_str, "#") == 0) { // So sanh voi chuoi "#"
                    	if (danhSachRong()) {
                    		printf("Danh sach rong. \n");
						}
                        break; // Neu la chuoi '#', thoat khoi vong lap
                    } else {
                        int input = atoi(input_str); // Chuyen doi chuoi thanh so nguyen
                        themSoVaoDau(input); // Them so nguyen vao danh sach
                    }
            	}
                printf("Danh sach da duoc khoi tao.\n");
                printf("\n");
                break;

            case 2:
                // Tinh trung binh nhan cua cac so duong, chan, chia het cho 5
                if (danhSach != NULL) {
                    float trungBinh = tinhTrungBinhNhan();
                    if (trungBinh != -1) {
                        printf("Trung binh nhan cua cac so duong, chan, chia het cho 5: %.2f\n", trungBinh);
                    } else {
                        printf("Khong co so phu hop.\n");
                    }
                } else {
                    printf("Danh sach rong.\n");
                }
				printf("\n");
                break;

            case 3:
                // Sap xep danh sach theo thu tu tang dan
				if (danhSach != NULL) {
                    // Su dung thuat toan sap xep chen
                    struct Node* current = danhSach;
                    while (current != NULL) {
                        struct Node* next = current->next;
                        while (next != NULL) {
                            if (current->data > next->data) {
                                // Hoan doi gia tri 2 nut
                                int temp = current->data;
                                current->data = next->data;
                                next->data = temp;
                            }
                            next = next->next;
                        }
                        current = current->next;
                    }
                    printf("Danh sach sau khi sap xep:\n");
                    current = danhSach;
                    while (current != NULL) {
                        printf("%d ", current->data);
                        current = current->next;
                    }
                    printf("\n");
                } else {
                    printf("Danh sach rong.\n");
                }
				printf("\n");
                break;

            case 4:
                // Kiem tra xem cap so nhan 3 phan tu lien tiep
                if (danhSach != NULL) {
                    foundCapSoNhan = 0; // Dat lai bien danh dau
                    int coCapSoNhan = kiemTraCapSoNhan();
                    if (coCapSoNhan) {
                        printf("Co cap so nhan 3 phan tu lien tiep: %d, %d, %d\n", capSoNhanC, capSoNhanB, capSoNhanA);
                    } else {
                        printf("Khong co cap so nhan trong danh sach.\n");
                    }
                } else {
                    printf("Danh sách rong.\n");
                }
				printf("\n");
                break;
                
            case 5:
                // Kiem tra so nguyen o vi tri thu 5
                if (danhSach != NULL) {
                    struct Node* current = danhSach;
                    int viTri = 1;
                    while (viTri < 5 && current != NULL) {
                        current = current->next;
                        viTri++;
                    }
                    if (current != NULL && laSoNguyenTo(current->data)) {
                        current->data = 10;
                        printf("Phan tu o vi tri thu 5 la so nguyen to, da duoc thay the so 10.\n");
                    } else {
                        printf("Phan tu o vi tri thu 5 khong la so nguyen to hoac danh sach khong du dai.\n");
                    }

                    // In danh sách liên ket ra man hinh
                    printf("Danh sach lien ket sau khi thay doi:\n");
                    current = danhSach;
                    while (current != NULL) {
                        printf("%d ", current->data);
                        current = current->next;
                    }
                    printf("\n");
                } else {
                    printf("Danh sach rong.\n");
                }
                printf("\n");
                break;

            case 0:
                // Thoat khoi chuong trinh
                printf("Ket thuc chuong trinh.\n");
                return 0;

            default:
                printf("Lua chon khong hop li, vui long chon lai.\n");
                break;
        }
    }
}
