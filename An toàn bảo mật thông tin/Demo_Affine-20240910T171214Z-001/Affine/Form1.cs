using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Affine {
    public partial class Form1 : Form {
        public Form1 ( ) {
            InitializeComponent ( );
        }

        // Hàm tính UCLN (sử dụng thuật toán Euclid)
        static int UCLN ( int a, int b ) {
            while ( b != 0 ) {
                int temp = b;
                b = a % b;
                a = temp;
            }
            return a;
        }

        // Hàm tìm nghịch đảo của a theo modulo 26
        static int nghichdao ( int a ) {
            for ( int i = 1 ; i < 26 ; i++ )
                if ( ( i * a ) % 26 == 1 )
                    return i;
            return 0;  // Trường hợp không tìm thấy nghịch đảo
        }

        private void btnEncode_Click ( object sender, EventArgs e ) {


            // Ham ma hoa
            if ( kea.Text == "" || keb.Text == "" ) {
                MessageBox.Show ( "Phải nhập khóa." );
            } else {
                try {
                    int a = int.Parse ( kea.Text );
                    int b = int.Parse ( keb.Text );

                    // Kiểm tra điều kiện của khóa
                    if ( a <= 0 || a > 25 || b < 0 || b > 25 || UCLN ( a, 26 ) != 1 ) {
                        MessageBox.Show ( "Khóa không hợp lệ." );
                    } else {
                        string plain = txtPtoE.Text;
                        string enc = "";

                        for ( int i = 0 ; i < plain.Length ; i++ ) {
                            char currentChar = plain [i];

                            if ( currentChar != ' ' ) {
                                // Xử lý ký tự chữ hoa
                                if ( char.IsUpper ( currentChar ) ) {
                                    enc += ( char ) ( ( ( a * ( currentChar - 'A' ) + b ) % 26 ) + 'A' );
                                }
                                // Xử lý ký tự chữ thường
                                else if ( char.IsLower ( currentChar ) ) {
                                    enc += ( char ) ( ( ( a * ( currentChar - 'a' ) + b ) % 26 ) + 'a' );
                                }
                            } else {
                                enc += " ";
                            }
                        }

                        txtAfE.Text = enc;
                    }
                } catch ( Exception ) {
                    MessageBox.Show ( "Khóa không hợp lệ." );
                }
            }

        }

        private void btnDecode_Click ( object sender, EventArgs e ) {

            // Ham giai ma
            txtP.Clear ( );
            if ( kda.Text == "" || kdb.Text == "" ) {
                MessageBox.Show ( "Phải nhập khóa." );
            } else {
                try {
                    int a = int.Parse ( kda.Text );
                    int b = int.Parse ( kdb.Text );

                    // Kiểm tra điều kiện của khóa
                    if ( a <= 0 || a > 25 || b < 0 || b > 25 || UCLN ( a, 26 ) != 1 ) {
                        MessageBox.Show ( "Khóa không hợp lệ." );
                    } else {
                        if ( a == 0 && b == 0 ) {
                            // Trường hợp thử tất cả các khóa (a = 0, b = 0)
                            for ( int i = 1 ; i < 26 ; i++ ) {
                                for ( int j = 0 ; j < 26 ; j++ ) {
                                    if ( UCLN ( i, 26 ) == 1 ) {
                                        string enc = txtEtoD.Text;
                                        string Pl = "a = " + i + ", b = " + j + " : ";

                                        for ( int k = 0 ; k < enc.Length ; k++ ) {
                                            char currentChar = enc [k];

                                            if ( currentChar != ' ' ) {
                                                if ( char.IsLower ( currentChar ) )
                                                    Pl += ( char ) ( nghichdao ( i ) * ( currentChar - 'a' - j + 26 ) % 26 + 'a' );
                                                else if ( char.IsUpper ( currentChar ) )
                                                    Pl += ( char ) ( nghichdao ( i ) * ( currentChar - 'A' - j + 26 ) % 26 + 'A' );
                                            } else {
                                                Pl += " ";
                                            }
                                        }
                                        Pl = Pl + "\n";
                                        txtP.Text += Pl;
                                    }
                                }
                            }
                        } else {
                            if ( a != 0 ) {
                                string enc = txtEtoD.Text;
                                string Pl = "";

                                for ( int i = 0 ; i < enc.Length ; i++ ) {
                                    char currentChar = enc [i];

                                    if ( currentChar != ' ' ) {
                                        if ( char.IsLower ( currentChar ) )
                                            Pl += ( char ) ( nghichdao ( a ) * ( currentChar - 'a' - b + 26 ) % 26 + 'a' );
                                        else if ( char.IsUpper ( currentChar ) )
                                            Pl += ( char ) ( nghichdao ( a ) * ( currentChar - 'A' - b + 26 ) % 26 + 'A' );
                                    } else {
                                        Pl += " ";
                                    }
                                }
                                txtP.Text = Pl;
                            }
                        }
                    }
                } catch ( Exception ) {
                    MessageBox.Show ( "Khóa không hợp lệ." );
                }
            }

        }

        private void txtAfE_TextChanged ( object sender, EventArgs e ) {

        }

        private void button1_Click ( object sender, EventArgs e ) {
            Application.Exit ();
        }

        private void button2_Click ( object sender, EventArgs e ) {
            Application.Exit();
        }
    }
}
