namespace CLIENT
{
    partial class client
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.hovaten = new System.Windows.Forms.TextBox();
            this.masv = new System.Windows.Forms.TextBox();
            this.button1 = new System.Windows.Forms.Button();
            this.diemcc = new System.Windows.Forms.TextBox();
            this.diemkt = new System.Windows.Forms.TextBox();
            this.diemthi = new System.Windows.Forms.TextBox();
            this.hocphan = new System.Windows.Forms.ComboBox();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.groupBox2 = new System.Windows.Forms.GroupBox();
            this.label6 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.button2 = new System.Windows.Forms.Button();
            this.data1 = new System.Windows.Forms.DataGridView();
            this.hoten = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.nganh = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.gpa = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.time = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.groupBox1.SuspendLayout();
            this.groupBox2.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.data1)).BeginInit();
            this.SuspendLayout();
            // 
            // hovaten
            // 
            this.hovaten.Location = new System.Drawing.Point(239, 70);
            this.hovaten.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.hovaten.Name = "hovaten";
            this.hovaten.Size = new System.Drawing.Size(174, 22);
            this.hovaten.TabIndex = 0;
            this.hovaten.TextChanged += new System.EventHandler(this.hovaten_TextChanged);
            // 
            // masv
            // 
            this.masv.Location = new System.Drawing.Point(239, 30);
            this.masv.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.masv.Name = "masv";
            this.masv.Size = new System.Drawing.Size(174, 22);
            this.masv.TabIndex = 1;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(426, 304);
            this.button1.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(88, 27);
            this.button1.TabIndex = 2;
            this.button1.Text = "Thêm Ngay";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // diemcc
            // 
            this.diemcc.Location = new System.Drawing.Point(210, 65);
            this.diemcc.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.diemcc.Name = "diemcc";
            this.diemcc.Size = new System.Drawing.Size(51, 22);
            this.diemcc.TabIndex = 5;
            this.diemcc.TextChanged += new System.EventHandler(this.diemcc_TextChanged);
            // 
            // diemkt
            // 
            this.diemkt.Location = new System.Drawing.Point(330, 63);
            this.diemkt.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.diemkt.Name = "diemkt";
            this.diemkt.Size = new System.Drawing.Size(54, 22);
            this.diemkt.TabIndex = 6;
            this.diemkt.TextChanged += new System.EventHandler(this.diemkt_TextChanged);
            // 
            // diemthi
            // 
            this.diemthi.Location = new System.Drawing.Point(432, 63);
            this.diemthi.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.diemthi.Name = "diemthi";
            this.diemthi.Size = new System.Drawing.Size(53, 22);
            this.diemthi.TabIndex = 7;
            // 
            // hocphan
            // 
            this.hocphan.FormattingEnabled = true;
            this.hocphan.Items.AddRange(new object[] {
            "Lập Trình Mạng",
            "Lập Trình PHP",
            "Lập Trình JAVA",
            "Lập Trình .NET"});
            this.hocphan.Location = new System.Drawing.Point(26, 63);
            this.hocphan.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.hocphan.Name = "hocphan";
            this.hocphan.Size = new System.Drawing.Size(140, 23);
            this.hocphan.TabIndex = 8;
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.label2);
            this.groupBox1.Controls.Add(this.label1);
            this.groupBox1.Controls.Add(this.masv);
            this.groupBox1.Controls.Add(this.hovaten);
            this.groupBox1.Font = new System.Drawing.Font("Times New Roman", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.groupBox1.Location = new System.Drawing.Point(79, 38);
            this.groupBox1.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Padding = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.groupBox1.Size = new System.Drawing.Size(531, 115);
            this.groupBox1.TabIndex = 9;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Thông Tin Sinh Viên";
            this.groupBox1.Enter += new System.EventHandler(this.groupBox1_Enter);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(125, 70);
            this.label2.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(90, 15);
            this.label2.TabIndex = 3;
            this.label2.Text = "Tên Sinh Viên:";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(129, 33);
            this.label1.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(86, 15);
            this.label1.TabIndex = 2;
            this.label1.Text = "Mã Sinh Viên:";
            // 
            // groupBox2
            // 
            this.groupBox2.Controls.Add(this.label6);
            this.groupBox2.Controls.Add(this.label5);
            this.groupBox2.Controls.Add(this.label4);
            this.groupBox2.Controls.Add(this.label3);
            this.groupBox2.Controls.Add(this.diemcc);
            this.groupBox2.Controls.Add(this.diemkt);
            this.groupBox2.Controls.Add(this.hocphan);
            this.groupBox2.Controls.Add(this.diemthi);
            this.groupBox2.Location = new System.Drawing.Point(79, 179);
            this.groupBox2.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.groupBox2.Name = "groupBox2";
            this.groupBox2.Padding = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.groupBox2.Size = new System.Drawing.Size(531, 115);
            this.groupBox2.TabIndex = 10;
            this.groupBox2.TabStop = false;
            this.groupBox2.Text = "Học Phần";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(411, 40);
            this.label6.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(90, 15);
            this.label6.TabIndex = 12;
            this.label6.Text = "Điểm Kiểm Tra";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(313, 40);
            this.label5.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(84, 15);
            this.label5.TabIndex = 11;
            this.label5.Text = "Điểm Giữa Kỳ";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(177, 40);
            this.label4.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(106, 15);
            this.label4.TabIndex = 10;
            this.label4.Text = "Điểm Chuyên Cần";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(66, 40);
            this.label3.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(59, 15);
            this.label3.TabIndex = 9;
            this.label3.Text = "Học Phần";
            this.label3.Click += new System.EventHandler(this.label3_Click);
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Location = new System.Drawing.Point(76, 310);
            this.label7.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(92, 15);
            this.label7.TabIndex = 11;
            this.label7.Text = "Kết Quả Trả Về";
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(522, 304);
            this.button2.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(88, 27);
            this.button2.TabIndex = 12;
            this.button2.Text = "Thoát";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // data1
            // 
            this.data1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.data1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.hoten,
            this.nganh,
            this.gpa,
            this.time});
            this.data1.Location = new System.Drawing.Point(50, 361);
            this.data1.Name = "data1";
            this.data1.Size = new System.Drawing.Size(604, 138);
            this.data1.TabIndex = 14;
            this.data1.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.data1_CellContentClick);
            // 
            // hoten
            // 
            this.hoten.DataPropertyName = "hoten";
            this.hoten.HeaderText = "Họ Và Tên";
            this.hoten.Name = "hoten";
            this.hoten.Width = 200;
            // 
            // nganh
            // 
            this.nganh.DataPropertyName = "nganh";
            this.nganh.HeaderText = "Điểm";
            this.nganh.Name = "nganh";
            // 
            // gpa
            // 
            this.gpa.DataPropertyName = "gpa";
            this.gpa.HeaderText = "GPA";
            this.gpa.Name = "gpa";
            // 
            // time
            // 
            this.time.DataPropertyName = "time";
            this.time.HeaderText = "Time";
            this.time.Name = "time";
            this.time.Width = 200;
            // 
            // client
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ActiveCaption;
            this.ClientSize = new System.Drawing.Size(731, 571);
            this.Controls.Add(this.data1);
            this.Controls.Add(this.button2);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.groupBox2);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.button1);
            this.Font = new System.Drawing.Font("Times New Roman", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Margin = new System.Windows.Forms.Padding(4, 3, 4, 3);
            this.Name = "client";
            this.Text = "Quản Lý Sinh Viên";
            this.Load += new System.EventHandler(this.client_Load);
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.groupBox2.ResumeLayout(false);
            this.groupBox2.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.data1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.TextBox hovaten;
        private System.Windows.Forms.TextBox masv;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.TextBox diemcc;
        private System.Windows.Forms.TextBox diemkt;
        private System.Windows.Forms.TextBox diemthi;
        private System.Windows.Forms.ComboBox hocphan;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.GroupBox groupBox2;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.DataGridView data1;
        private System.Windows.Forms.DataGridViewTextBoxColumn hoten;
        private System.Windows.Forms.DataGridViewTextBoxColumn nganh;
        private System.Windows.Forms.DataGridViewTextBoxColumn gpa;
        private System.Windows.Forms.DataGridViewTextBoxColumn time;
    }
}

