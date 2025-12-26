using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net.Sockets;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CLIENT
{
    public partial class client : Form
    {
        public client()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string masv = this.masv.Text;
            string hovaten = this.hovaten.Text;
            string hocphan = this.hocphan.Text;
            string diemcc = this.diemcc.Text;
            string diemkt = this.diemkt.Text;
            string diemthi = this.diemthi.Text;
            DateTime ngayhientai = DateTime.Now;
            string dataSendSv = $"{masv};{hovaten};{hocphan};{diemcc};{diemkt};{diemthi};{ngayhientai}";

            try
            {
                using (TcpClient client = new TcpClient("localhost", 1308))
                using (NetworkStream stream = client.GetStream())
                {
                    byte[] data = Encoding.UTF8.GetBytes(dataSendSv);
                    stream.Write(data, 0, data.Length);

                    data = new byte[1024];
                    int bytesRead = stream.Read(data, 0, data.Length);
                    string response = Encoding.UTF8.GetString(data, 0, bytesRead);

                    string[] datatrave = response.Split('|');

                    if (datatrave.Length == 4) //loai bo khoang trang
                    {
                        string hoten = datatrave[0].Trim();
                        string nganh = datatrave[1].Trim();
                        string gpa = datatrave[2].Trim();
                        string time = datatrave[3].Trim();

                        data1.Rows.Clear();
                        data1.Rows.Add(hoten, nganh, gpa, time);
                    }
                    else
                    {
                        MessageBox.Show("Dữ liệu từ server không đúng định dạng!");
                    }

                    
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Trùng Dữ Liệu");
            }
        }
     
        private void client_Load(object sender, EventArgs e)
        {

        }

        private void hovaten_TextChanged(object sender, EventArgs e)
        {

        }

        

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void diemkt_TextChanged(object sender, EventArgs e)
        {

        }

        private void diemcc_TextChanged(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        


       

        private void data1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
           
        }

    }
}
