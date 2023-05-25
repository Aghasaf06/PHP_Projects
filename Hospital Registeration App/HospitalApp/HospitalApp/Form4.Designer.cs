namespace HospitalApp
{
    partial class Form4
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form4));
            this.noteTxtBox2 = new System.Windows.Forms.TextBox();
            this.label7 = new System.Windows.Forms.Label();
            this.medicalDepartmentComboBox2 = new System.Windows.Forms.ComboBox();
            this.label6 = new System.Windows.Forms.Label();
            this.admitDateTimePicker2 = new System.Windows.Forms.DateTimePicker();
            this.label5 = new System.Windows.Forms.Label();
            this.bDayDateTimePicker2 = new System.Windows.Forms.DateTimePicker();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.femaleRadioBtn2 = new System.Windows.Forms.RadioButton();
            this.maleRadioBtn2 = new System.Windows.Forms.RadioButton();
            this.numberTxtBox2 = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.fullnameTxtBox2 = new System.Windows.Forms.TextBox();
            this.closeBtn2 = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.chooseComboBox = new System.Windows.Forms.ComboBox();
            this.label8 = new System.Windows.Forms.Label();
            this.editBtn = new System.Windows.Forms.Button();
            this.searchBtn2 = new System.Windows.Forms.Button();
            this.deleteBtn = new System.Windows.Forms.Button();
            this.secBtn = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // noteTxtBox2
            // 
            this.noteTxtBox2.Location = new System.Drawing.Point(119, 309);
            this.noteTxtBox2.Multiline = true;
            this.noteTxtBox2.Name = "noteTxtBox2";
            this.noteTxtBox2.Size = new System.Drawing.Size(670, 97);
            this.noteTxtBox2.TabIndex = 36;
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label7.Location = new System.Drawing.Point(23, 312);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(73, 25);
            this.label7.TabIndex = 35;
            this.label7.Text = "Qeyd:";
            // 
            // medicalDepartmentComboBox2
            // 
            this.medicalDepartmentComboBox2.AutoCompleteMode = System.Windows.Forms.AutoCompleteMode.SuggestAppend;
            this.medicalDepartmentComboBox2.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.ListItems;
            this.medicalDepartmentComboBox2.FormattingEnabled = true;
            this.medicalDepartmentComboBox2.Items.AddRange(new object[] {
            "Anesteziologiya",
            "Fizioterapiya",
            "İnfeksionist",
            "Kardiologiya",
            "Neyrocərrahiyyə",
            "Oftalmologiya",
            "Orqan transplantasiyası",
            "Ortopediya-Travmatologiya",
            "Pediatrik reanimasiyası",
            "Pediatriya",
            "Stomatologiya",
            "Şüa Diaqnostika",
            "Terapiya",
            "Tibbi Laboratoriya",
            "Urologiya",
            "Ümumi cərrahiyyə"});
            this.medicalDepartmentComboBox2.Location = new System.Drawing.Point(159, 253);
            this.medicalDepartmentComboBox2.Name = "medicalDepartmentComboBox2";
            this.medicalDepartmentComboBox2.Size = new System.Drawing.Size(289, 39);
            this.medicalDepartmentComboBox2.TabIndex = 34;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label6.Location = new System.Drawing.Point(17, 262);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(136, 25);
            this.label6.TabIndex = 33;
            this.label6.Text = "Tibbi şöbəsi:";
            // 
            // admitDateTimePicker2
            // 
            this.admitDateTimePicker2.Location = new System.Drawing.Point(159, 200);
            this.admitDateTimePicker2.MinDate = new System.DateTime(2022, 12, 20, 0, 0, 0, 0);
            this.admitDateTimePicker2.Name = "admitDateTimePicker2";
            this.admitDateTimePicker2.Size = new System.Drawing.Size(395, 38);
            this.admitDateTimePicker2.TabIndex = 32;
            this.admitDateTimePicker2.Value = new System.DateTime(2022, 12, 20, 0, 0, 0, 0);
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label5.Location = new System.Drawing.Point(16, 200);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(137, 25);
            this.label5.TabIndex = 31;
            this.label5.Text = "Qəbul tarixi:";
            // 
            // bDayDateTimePicker2
            // 
            this.bDayDateTimePicker2.Format = System.Windows.Forms.DateTimePickerFormat.Short;
            this.bDayDateTimePicker2.Location = new System.Drawing.Point(171, 134);
            this.bDayDateTimePicker2.MaxDate = new System.DateTime(2022, 12, 20, 1, 20, 24, 0);
            this.bDayDateTimePicker2.Name = "bDayDateTimePicker2";
            this.bDayDateTimePicker2.Size = new System.Drawing.Size(195, 38);
            this.bDayDateTimePicker2.TabIndex = 30;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label3.Location = new System.Drawing.Point(15, 147);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(150, 25);
            this.label3.TabIndex = 29;
            this.label3.Text = "Doğum tarixi:";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label4.Location = new System.Drawing.Point(543, 82);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(69, 25);
            this.label4.TabIndex = 28;
            this.label4.Text = "Cinsi:";
            // 
            // femaleRadioBtn2
            // 
            this.femaleRadioBtn2.AutoSize = true;
            this.femaleRadioBtn2.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.femaleRadioBtn2.Location = new System.Drawing.Point(694, 82);
            this.femaleRadioBtn2.Name = "femaleRadioBtn2";
            this.femaleRadioBtn2.Size = new System.Drawing.Size(95, 29);
            this.femaleRadioBtn2.TabIndex = 27;
            this.femaleRadioBtn2.TabStop = true;
            this.femaleRadioBtn2.Text = "Qadın";
            this.femaleRadioBtn2.UseVisualStyleBackColor = true;
            // 
            // maleRadioBtn2
            // 
            this.maleRadioBtn2.AutoSize = true;
            this.maleRadioBtn2.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.maleRadioBtn2.Location = new System.Drawing.Point(618, 81);
            this.maleRadioBtn2.Name = "maleRadioBtn2";
            this.maleRadioBtn2.Size = new System.Drawing.Size(70, 29);
            this.maleRadioBtn2.TabIndex = 26;
            this.maleRadioBtn2.TabStop = true;
            this.maleRadioBtn2.Text = "Kişi";
            this.maleRadioBtn2.UseVisualStyleBackColor = true;
            // 
            // numberTxtBox2
            // 
            this.numberTxtBox2.Location = new System.Drawing.Point(563, 134);
            this.numberTxtBox2.Name = "numberTxtBox2";
            this.numberTxtBox2.Size = new System.Drawing.Size(226, 38);
            this.numberTxtBox2.TabIndex = 25;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label2.Location = new System.Drawing.Point(394, 144);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(163, 25);
            this.label2.TabIndex = 24;
            this.label2.Text = "Əlaqə nömrəsi:";
            // 
            // fullnameTxtBox2
            // 
            this.fullnameTxtBox2.Location = new System.Drawing.Point(137, 77);
            this.fullnameTxtBox2.Name = "fullnameTxtBox2";
            this.fullnameTxtBox2.Size = new System.Drawing.Size(382, 38);
            this.fullnameTxtBox2.TabIndex = 23;
            // 
            // closeBtn2
            // 
            this.closeBtn2.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.closeBtn2.Location = new System.Drawing.Point(503, 433);
            this.closeBtn2.Name = "closeBtn2";
            this.closeBtn2.Size = new System.Drawing.Size(140, 38);
            this.closeBtn2.TabIndex = 21;
            this.closeBtn2.Text = "Bağla";
            this.closeBtn2.UseVisualStyleBackColor = true;
            this.closeBtn2.Click += new System.EventHandler(this.closeBtn2_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label1.Location = new System.Drawing.Point(15, 86);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(116, 25);
            this.label1.TabIndex = 20;
            this.label1.Text = "Ad Soyad:";
            // 
            // chooseComboBox
            // 
            this.chooseComboBox.AllowDrop = true;
            this.chooseComboBox.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.chooseComboBox.Font = new System.Drawing.Font("Microsoft Sans Serif", 13.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.chooseComboBox.FormattingEnabled = true;
            this.chooseComboBox.Location = new System.Drawing.Point(159, 13);
            this.chooseComboBox.Name = "chooseComboBox";
            this.chooseComboBox.Size = new System.Drawing.Size(362, 37);
            this.chooseComboBox.TabIndex = 38;
            this.chooseComboBox.SelectedIndexChanged += new System.EventHandler(this.Form4_Activated);
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label8.Location = new System.Drawing.Point(28, 21);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(72, 25);
            this.label8.TabIndex = 37;
            this.label8.Text = "Seçin:";
            // 
            // editBtn
            // 
            this.editBtn.Cursor = System.Windows.Forms.Cursors.Hand;
            this.editBtn.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.editBtn.Location = new System.Drawing.Point(649, 433);
            this.editBtn.Name = "editBtn";
            this.editBtn.Size = new System.Drawing.Size(140, 38);
            this.editBtn.TabIndex = 39;
            this.editBtn.Text = "Redaktə et";
            this.editBtn.UseVisualStyleBackColor = true;
            this.editBtn.Click += new System.EventHandler(this.editBtn_Click);
            // 
            // searchBtn2
            // 
            this.searchBtn2.Cursor = System.Windows.Forms.Cursors.Hand;
            this.searchBtn2.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.searchBtn2.Location = new System.Drawing.Point(527, 15);
            this.searchBtn2.Name = "searchBtn2";
            this.searchBtn2.Size = new System.Drawing.Size(116, 38);
            this.searchBtn2.TabIndex = 40;
            this.searchBtn2.Text = "Axtar";
            this.searchBtn2.UseVisualStyleBackColor = true;
            this.searchBtn2.Click += new System.EventHandler(this.searchBtn2_Click);
            // 
            // deleteBtn
            // 
            this.deleteBtn.BackColor = System.Drawing.Color.Red;
            this.deleteBtn.Cursor = System.Windows.Forms.Cursors.Hand;
            this.deleteBtn.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.deleteBtn.Location = new System.Drawing.Point(12, 437);
            this.deleteBtn.Name = "deleteBtn";
            this.deleteBtn.Size = new System.Drawing.Size(116, 38);
            this.deleteBtn.TabIndex = 41;
            this.deleteBtn.Text = "Sil";
            this.deleteBtn.UseVisualStyleBackColor = false;
            this.deleteBtn.Click += new System.EventHandler(this.deleteBtn_Click);
            // 
            // secBtn
            // 
            this.secBtn.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.secBtn.Location = new System.Drawing.Point(106, 13);
            this.secBtn.Name = "secBtn";
            this.secBtn.Size = new System.Drawing.Size(47, 35);
            this.secBtn.TabIndex = 42;
            this.secBtn.Text = "⏭";
            this.secBtn.UseVisualStyleBackColor = true;
            this.secBtn.Click += new System.EventHandler(this.secBtn_Click);
            // 
            // Form4
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(16F, 31F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(11)))), ((int)(((byte)(206)))), ((int)(((byte)(175)))));
            this.ClientSize = new System.Drawing.Size(807, 487);
            this.Controls.Add(this.secBtn);
            this.Controls.Add(this.deleteBtn);
            this.Controls.Add(this.searchBtn2);
            this.Controls.Add(this.editBtn);
            this.Controls.Add(this.chooseComboBox);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.noteTxtBox2);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.medicalDepartmentComboBox2);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.admitDateTimePicker2);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.bDayDateTimePicker2);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.femaleRadioBtn2);
            this.Controls.Add(this.maleRadioBtn2);
            this.Controls.Add(this.numberTxtBox2);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.fullnameTxtBox2);
            this.Controls.Add(this.closeBtn2);
            this.Controls.Add(this.label1);
            this.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Margin = new System.Windows.Forms.Padding(6);
            this.Name = "Form4";
            this.Text = " AXTAR VƏ REDAKTƏ ET";
            this.Activated += new System.EventHandler(this.Form4_Activated);
            this.Load += new System.EventHandler(this.Form4_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.TextBox noteTxtBox2;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.ComboBox medicalDepartmentComboBox2;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.DateTimePicker admitDateTimePicker2;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.DateTimePicker bDayDateTimePicker2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.RadioButton femaleRadioBtn2;
        private System.Windows.Forms.RadioButton maleRadioBtn2;
        private System.Windows.Forms.TextBox numberTxtBox2;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox fullnameTxtBox2;
        private System.Windows.Forms.Button closeBtn2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.ComboBox chooseComboBox;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Button editBtn;
        private System.Windows.Forms.Button searchBtn2;
        private System.Windows.Forms.Button deleteBtn;
        private System.Windows.Forms.Button secBtn;
    }
}