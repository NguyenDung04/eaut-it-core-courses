#include <iostream>
#include <fstream>
#include <unordered_map>
#include <vector>
#include <bitset>

using namespace std;

// Hàm giải nén Huffman
string decodeHuffman(const string &encodedData, const unordered_map<string, char> &huffmanMap) {
    string decodedData = "";
    string currentCode = "";

    for (char bit : encodedData) {
        currentCode += bit;

        if (huffmanMap.count(currentCode)) {
            decodedData += huffmanMap.at(currentCode);
            currentCode = "";
        }
    }

    return decodedData;
}

int main() {
    // Đọc bảng mã Huffman từ tệp tin
    ifstream huffmanTableFile("huffman_table.txt");

    if (!huffmanTableFile.is_open()) {
        cerr << "Không thể mở tệp tin huffman_table.txt" << endl;
        return 1;
    }

    unordered_map<string, char> huffmanMap;
    string code, character;

    while (huffmanTableFile >> code >> character) {
        huffmanMap[code] = character[0];
    }

    huffmanTableFile.close();

    // Đọc đoạn mã huffman từ tệp tin encoded_data.txt
    ifstream encodedDataFile("encoded_data.txt");

    if (!encodedDataFile.is_open()) {
        cerr << "Không thể mở tệp tin encoded_data.txt" << endl;
        return 1;
    }

    string encodedData;
    getline(encodedDataFile, encodedData);

    encodedDataFile.close();

    // Giải nén dữ liệu
    string decodedData = decodeHuffman(encodedData, huffmanMap);

    // In ra dữ liệu đã giải nén
    cout << "Dữ liệu đã giải nén: " << decodedData << endl;

    return 0;
}
