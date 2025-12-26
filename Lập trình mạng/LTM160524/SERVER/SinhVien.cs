using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SERVER
{
    internal class SinhVien
    {
        public string MaSV { get; set; }
        public string Hoten { get; set; }
        public string Nganh { get; set; }
        public double DiemCC { get; set; }
        public double DiemKT { get; set; }
        public double DiemThi { get; set; }
        public DateTime NgayHienTai { get; set; }
        public SinhVien(string maSV, string hoten, string nganh, double diemCC, double diemKT, double diemThi, DateTime ngayHienTai)
        {
            MaSV = maSV;
            Hoten = hoten;
            Nganh = nganh;
            DiemCC = diemCC;
            DiemKT = diemKT;
            DiemThi = diemThi;
            NgayHienTai = ngayHienTai;
        }

        public double DiemTB()
        {
            return (this.DiemCC + this.DiemKT * 3 + this.DiemThi * 6) / 10;
        }

        public char DiemGPI(double dtb)
        {
            if (dtb < 5)
            {
                return 'D';
            }
            else if (dtb >= 5 && dtb < 6.5)
            {
                return 'C';
            }
            else if (dtb >= 6.5 && dtb < 8)
            {
                return 'B';
            }
            else if (dtb >= 8)
            {
                return 'A';
            }
            else
            {
                throw new ArgumentException("Không có giá trị .");
            }
        }
    }
}
