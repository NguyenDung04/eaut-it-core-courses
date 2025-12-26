using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net.Sockets;
using System.Net;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;

namespace SERVER
{

    public partial class Server : Form
    {
        private static Dictionary<string, SinhVien> dictionary = new Dictionary<string, SinhVien>();
        private TcpListener listener;
        private const int port = 1308;
        public Server()
        {
            InitializeComponent();
            StartServer();
        }
        private async void StartServer()
        {
            try
            {
                IPAddress ip = IPAddress.Any;
                listener = new TcpListener(ip, port);
                listener.Start();
                ReponveList($"Đợi cổng  {port}...");

                while (true)
                {
                    TcpClient client = await listener.AcceptTcpClientAsync();
                    HandleClient(client);
                }
            }
            catch (Exception ex)
            {
                ReponveList($"Error: {ex.Message}");
            }
        }
        private async void HandleClient(TcpClient client)
        {
            NetworkStream stream = null;
            try
            {
                stream = client.GetStream();
                byte[] buffer = new byte[1024];
                int bytesRead;

                while ((bytesRead = await stream.ReadAsync(buffer, 0, buffer.Length)) != 0)
                {
                    string dataReceived = Encoding.UTF8.GetString(buffer, 0, bytesRead);
                    ReponveList($"Dữ Liệu Nhận Được: {dataReceived}");

                    string[] danhsachsv = dataReceived.Split(';');
                    if (danhsachsv.Length == 7)
                    {
                        string maSV = danhsachsv[0];
                        string hoTen = danhsachsv[1];
                        string hocPhan = danhsachsv[2];
                        double diemCC = double.Parse(danhsachsv[3]);
                        double diemKT = double.Parse(danhsachsv[4]);
                        double diemThi = double.Parse(danhsachsv[5]);
                        DateTime ngayHienTai = DateTime.Now;
                        SinhVien sv = new SinhVien(maSV, hoTen, hocPhan, diemCC, diemKT, diemThi, ngayHienTai);
                       
                        string response = $"{sv.Hoten} | {sv.Nganh} | {sv.DiemGPI(sv.DiemTB())} | {sv.NgayHienTai}";
                        ReponveList($"Dữ Liệu Trả Về: {response}");

                        string filenote = " D:\\Important_Documents\\Đại Học Công Nghệ Đông Á\\Đại Học Công Nghệ Đông Á\\Kì 4\\Lập trình mạng\\LTM160524\\LTM160524\\sinhvien.txt";
                        sendve(sv, filenote);
                        byte[] responseData = Encoding.UTF8.GetBytes(response);
                        await stream.WriteAsync(responseData, 0, responseData.Length);
                    }
                }
            }
            catch (Exception ex)
            {
                ReponveList($"Error: {ex.Message}");
            }
            finally
            {
                client.Close();
            }
        }
        private void sendve(SinhVien sv, string filenote)
        {
            try
            {
                using (StreamWriter writer = new StreamWriter(filenote, true))
                {
                    string Fileo = $"Họ Và Tên : {sv.Hoten} | Môn Học : {sv.Nganh}  | Điểm GPA : {sv.DiemGPI(sv.DiemTB())} | Time : {sv.NgayHienTai}";
                    writer.WriteLine(Fileo);
                }
            }
            catch (Exception ex)
            {
                ReponveList($"Lỗi Không ghi được: {ex.Message}");
            }
        }
        private void ReponveList(string item)
        {
            if (list_sv.InvokeRequired)
            {
                this.Invoke((MethodInvoker)delegate
                {
                    list_sv.Items.Add(item);
                });
            }
            else
            {
                list_sv.Items.Add(item);
            }
        }
        private void list_sv_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void Server_Load(object sender, EventArgs e)
        {

        }
    }
}
