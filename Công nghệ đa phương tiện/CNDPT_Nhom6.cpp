#include <iostream>
#include <fstream>
#include <queue>
#include <map>
#include <bitset>

using namespace std;

// Định nghĩa một nút trong cây Huffman
struct Node {
    char data;
    int freq;
    Node* left, *right;

    Node(char data, int freq) : data(data), freq(freq), left(nullptr), right(nullptr) {}
};

// So sánh để sử dụng trong priority_queue
struct Compare {
    bool operator()(Node* left, Node* right) {
        return left->freq > right->freq;
    }
};

// Tạo cây Huffman từ bảng thống kê
Node* buildHuffmanTree(map<char, int>& freqTable) {
    priority_queue<Node*, vector<Node*>, Compare> pq;

    for (auto& pair : freqTable) {
        pq.push(new Node(pair.first, pair.second));
    }

    while (pq.size() > 1) {
        Node* left = pq.top(); pq.pop();
        Node* right = pq.top(); pq.pop();

        Node* merged = new Node('$', left->freq + right->freq);
        merged->left = left;
        merged->right = right;

        pq.push(merged);
    }

    return pq.top();
}

// Tạo bảng mã Huffman
void buildHuffmanCodes(Node* root, string code, map<char, string>& huffmanCodes) {
    if (root == nullptr) return;

    if (root->data != '$') {
        huffmanCodes[root->data] = code;
    }

    buildHuffmanCodes(root->left, code + "0", huffmanCodes);
    buildHuffmanCodes(root->right, code + "1", huffmanCodes);
}

// Mã hóa dữ liệu và trả về kết quả
string encodeData(string data, map<char, string>& huffmanCodes) {
    string encodedData = "";
    for (char c : data) {
        encodedData += huffmanCodes[c];
    }

    return encodedData;
}

int main() {
    string inputFile = "CNDPT_Nhom6.txt";

    // Bước 1: Đọc dữ liệu từ tệp tin đầu vào
    ifstream inFile(inputFile, ios::binary | ios::ate);
    streampos fileSize = inFile.tellg();
    inFile.seekg(0, ios::beg);

    string data((unsigned int)fileSize, ' ');
    inFile.read(&data[0], fileSize);
    inFile.close();

    // Bước 2: Lập bảng thống kê
    map<char, int> freqTable;
    for (char c : data) {
        freqTable[c]++;
    }

    // Bước 3: Tạo cây Huffman
    Node* root = buildHuffmanTree(freqTable);

    // Bước 4: Tạo bảng mã Huffman
    map<char, string> huffmanCodes;
    buildHuffmanCodes(root, "", huffmanCodes);

    // Bước 5: Mã hóa dữ liệu và in kết quả ra terminal
    cout << "\nDu lieu can nen:\n" << data << "\n\n";

    cout << "Huffman Codes:\n";
    for (auto& pair : huffmanCodes) {
        cout << pair.first << ": " << pair.second << endl;
    }
    cout << "\n";

    string encodedData = encodeData(data, huffmanCodes);

    // In dãy bit mã hóa Huffman ra terminal
    cout << "Du lieu ra:\n" << encodedData << "\n\n";

    // Bước 6: Tính toán input bit và output byte
    int inputBits = fileSize * 8;
    int outputBytes = (encodedData.length());  // làm tròn lên khi cần thiết

    // Bước 7: Tính tỷ lệ nén
    double compressionRatio = ((double)(inputBits-outputBytes) / inputBits)*100;

    // In thông tin
    cout << "Input byte: " << inputBits << " bytes" << endl;
    cout << "Ouput byte: " << outputBytes << " bytes" << endl;
    cout << "Ti le nen: " << compressionRatio << endl << "\n";

    return 0;
}
