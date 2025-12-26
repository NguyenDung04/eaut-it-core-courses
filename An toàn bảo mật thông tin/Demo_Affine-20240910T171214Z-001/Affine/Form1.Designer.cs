namespace Affine
{
    partial class Form1
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
            this.tabC = new System.Windows.Forms.TabControl();
            this.tabPage1 = new System.Windows.Forms.TabPage();
            this.button1 = new System.Windows.Forms.Button();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.btnEncode = new System.Windows.Forms.Button();
            this.txtAfE = new System.Windows.Forms.RichTextBox();
            this.keb = new System.Windows.Forms.TextBox();
            this.kea = new System.Windows.Forms.TextBox();
            this.txtPtoE = new System.Windows.Forms.RichTextBox();
            this.tabPage2 = new System.Windows.Forms.TabPage();
            this.button2 = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.btnDecode = new System.Windows.Forms.Button();
            this.txtP = new System.Windows.Forms.RichTextBox();
            this.kdb = new System.Windows.Forms.TextBox();
            this.kda = new System.Windows.Forms.TextBox();
            this.txtEtoD = new System.Windows.Forms.RichTextBox();
            this.tabC.SuspendLayout();
            this.tabPage1.SuspendLayout();
            this.tabPage2.SuspendLayout();
            this.SuspendLayout();
            // 
            // tabC
            // 
            this.tabC.Controls.Add(this.tabPage1);
            this.tabC.Controls.Add(this.tabPage2);
            this.tabC.Dock = System.Windows.Forms.DockStyle.Fill;
            this.tabC.Location = new System.Drawing.Point(0, 0);
            this.tabC.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.tabC.Name = "tabC";
            this.tabC.SelectedIndex = 0;
            this.tabC.Size = new System.Drawing.Size(777, 331);
            this.tabC.TabIndex = 0;
            // 
            // tabPage1
            // 
            this.tabPage1.Controls.Add(this.button1);
            this.tabPage1.Controls.Add(this.label3);
            this.tabPage1.Controls.Add(this.label2);
            this.tabPage1.Controls.Add(this.label1);
            this.tabPage1.Controls.Add(this.btnEncode);
            this.tabPage1.Controls.Add(this.txtAfE);
            this.tabPage1.Controls.Add(this.keb);
            this.tabPage1.Controls.Add(this.kea);
            this.tabPage1.Controls.Add(this.txtPtoE);
            this.tabPage1.Location = new System.Drawing.Point(4, 25);
            this.tabPage1.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.tabPage1.Name = "tabPage1";
            this.tabPage1.Padding = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.tabPage1.Size = new System.Drawing.Size(769, 302);
            this.tabPage1.TabIndex = 0;
            this.tabPage1.Text = "Encode";
            this.tabPage1.UseVisualStyleBackColor = true;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(639, 139);
            this.button1.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(100, 28);
            this.button1.TabIndex = 13;
            this.button1.Text = "Thoat";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(321, 143);
            this.label3.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(15, 16);
            this.label3.TabIndex = 12;
            this.label3.Text = "b";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(104, 143);
            this.label2.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(15, 16);
            this.label2.TabIndex = 11;
            this.label2.Text = "a";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(11, 143);
            this.label1.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(41, 16);
            this.label1.TabIndex = 10;
            this.label1.Text = "Khóa:";
            // 
            // btnEncode
            // 
            this.btnEncode.Location = new System.Drawing.Point(531, 139);
            this.btnEncode.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.btnEncode.Name = "btnEncode";
            this.btnEncode.Size = new System.Drawing.Size(100, 28);
            this.btnEncode.TabIndex = 9;
            this.btnEncode.Text = "Encode";
            this.btnEncode.UseVisualStyleBackColor = true;
            this.btnEncode.Click += new System.EventHandler(this.btnEncode_Click);
            // 
            // txtAfE
            // 
            this.txtAfE.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.txtAfE.Font = new System.Drawing.Font("Times New Roman", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(163)));
            this.txtAfE.Location = new System.Drawing.Point(4, 194);
            this.txtAfE.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.txtAfE.Name = "txtAfE";
            this.txtAfE.Size = new System.Drawing.Size(757, 100);
            this.txtAfE.TabIndex = 8;
            this.txtAfE.Text = "";
            this.txtAfE.TextChanged += new System.EventHandler(this.txtAfE_TextChanged);
            // 
            // keb
            // 
            this.keb.Location = new System.Drawing.Point(347, 139);
            this.keb.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.keb.Name = "keb";
            this.keb.Size = new System.Drawing.Size(132, 22);
            this.keb.TabIndex = 7;
            // 
            // kea
            // 
            this.kea.Location = new System.Drawing.Point(129, 139);
            this.kea.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.kea.Name = "kea";
            this.kea.Size = new System.Drawing.Size(132, 22);
            this.kea.TabIndex = 6;
            // 
            // txtPtoE
            // 
            this.txtPtoE.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.txtPtoE.Font = new System.Drawing.Font("Times New Roman", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(163)));
            this.txtPtoE.Location = new System.Drawing.Point(4, 4);
            this.txtPtoE.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.txtPtoE.Name = "txtPtoE";
            this.txtPtoE.Size = new System.Drawing.Size(757, 110);
            this.txtPtoE.TabIndex = 5;
            this.txtPtoE.Text = "";
            // 
            // tabPage2
            // 
            this.tabPage2.Controls.Add(this.button2);
            this.tabPage2.Controls.Add(this.label4);
            this.tabPage2.Controls.Add(this.label5);
            this.tabPage2.Controls.Add(this.label6);
            this.tabPage2.Controls.Add(this.btnDecode);
            this.tabPage2.Controls.Add(this.txtP);
            this.tabPage2.Controls.Add(this.kdb);
            this.tabPage2.Controls.Add(this.kda);
            this.tabPage2.Controls.Add(this.txtEtoD);
            this.tabPage2.Location = new System.Drawing.Point(4, 25);
            this.tabPage2.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.tabPage2.Name = "tabPage2";
            this.tabPage2.Padding = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.tabPage2.Size = new System.Drawing.Size(769, 302);
            this.tabPage2.TabIndex = 1;
            this.tabPage2.Text = "Decode";
            this.tabPage2.UseVisualStyleBackColor = true;
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(648, 137);
            this.button2.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(100, 28);
            this.button2.TabIndex = 18;
            this.button2.Text = "Thoat";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(321, 143);
            this.label4.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(15, 16);
            this.label4.TabIndex = 17;
            this.label4.Text = "b";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(104, 143);
            this.label5.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(15, 16);
            this.label5.TabIndex = 16;
            this.label5.Text = "a";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(11, 143);
            this.label6.Margin = new System.Windows.Forms.Padding(4, 0, 4, 0);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(41, 16);
            this.label6.TabIndex = 15;
            this.label6.Text = "Khóa:";
            // 
            // btnDecode
            // 
            this.btnDecode.Location = new System.Drawing.Point(540, 137);
            this.btnDecode.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.btnDecode.Name = "btnDecode";
            this.btnDecode.Size = new System.Drawing.Size(100, 28);
            this.btnDecode.TabIndex = 14;
            this.btnDecode.Text = "Decode";
            this.btnDecode.UseVisualStyleBackColor = true;
            this.btnDecode.Click += new System.EventHandler(this.btnDecode_Click);
            // 
            // txtP
            // 
            this.txtP.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.txtP.Font = new System.Drawing.Font("Times New Roman", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(163)));
            this.txtP.Location = new System.Drawing.Point(4, 185);
            this.txtP.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.txtP.Name = "txtP";
            this.txtP.Size = new System.Drawing.Size(757, 110);
            this.txtP.TabIndex = 13;
            this.txtP.Text = "";
            // 
            // kdb
            // 
            this.kdb.Location = new System.Drawing.Point(347, 139);
            this.kdb.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.kdb.Name = "kdb";
            this.kdb.Size = new System.Drawing.Size(132, 22);
            this.kdb.TabIndex = 12;
            // 
            // kda
            // 
            this.kda.Location = new System.Drawing.Point(129, 139);
            this.kda.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.kda.Name = "kda";
            this.kda.Size = new System.Drawing.Size(132, 22);
            this.kda.TabIndex = 11;
            // 
            // txtEtoD
            // 
            this.txtEtoD.Dock = System.Windows.Forms.DockStyle.Top;
            this.txtEtoD.Font = new System.Drawing.Font("Times New Roman", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(163)));
            this.txtEtoD.Location = new System.Drawing.Point(4, 4);
            this.txtEtoD.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.txtEtoD.Name = "txtEtoD";
            this.txtEtoD.Size = new System.Drawing.Size(761, 110);
            this.txtEtoD.TabIndex = 10;
            this.txtEtoD.Text = "";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(777, 331);
            this.Controls.Add(this.tabC);
            this.Margin = new System.Windows.Forms.Padding(4, 4, 4, 4);
            this.Name = "Form1";
            this.Text = "Affine";
            this.tabC.ResumeLayout(false);
            this.tabPage1.ResumeLayout(false);
            this.tabPage1.PerformLayout();
            this.tabPage2.ResumeLayout(false);
            this.tabPage2.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.TabControl tabC;
        private System.Windows.Forms.TabPage tabPage1;
        private System.Windows.Forms.TabPage tabPage2;
        private System.Windows.Forms.Button btnEncode;
        private System.Windows.Forms.RichTextBox txtAfE;
        private System.Windows.Forms.TextBox keb;
        private System.Windows.Forms.TextBox kea;
        private System.Windows.Forms.RichTextBox txtPtoE;
        private System.Windows.Forms.Button btnDecode;
        private System.Windows.Forms.RichTextBox txtP;
        private System.Windows.Forms.TextBox kdb;
        private System.Windows.Forms.TextBox kda;
        private System.Windows.Forms.RichTextBox txtEtoD;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button button2;
    }
}

