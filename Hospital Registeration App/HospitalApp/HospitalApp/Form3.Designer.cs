namespace HospitalApp
{
    partial class Form3
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form3));
            this.label1 = new System.Windows.Forms.Label();
            this.closeBtn = new System.Windows.Forms.Button();
            this.confirmBtn = new System.Windows.Forms.Button();
            this.fullnameTxtBox = new System.Windows.Forms.TextBox();
            this.numberTxtBox = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.maleRadioBtn = new System.Windows.Forms.RadioButton();
            this.femaleRadioBtn = new System.Windows.Forms.RadioButton();
            this.label4 = new System.Windows.Forms.Label();
            this.bDayDateTimePicker = new System.Windows.Forms.DateTimePicker();
            this.label3 = new System.Windows.Forms.Label();
            this.admitDateTimePicker = new System.Windows.Forms.DateTimePicker();
            this.label5 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.medicalDepartmentComboBox = new System.Windows.Forms.ComboBox();
            this.noteTxtBox = new System.Windows.Forms.TextBox();
            this.label7 = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label1.Location = new System.Drawing.Point(11, 34);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(116, 25);
            this.label1.TabIndex = 0;
            this.label1.Text = "Ad Soyad:";
            // 
            // closeBtn
            // 
            this.closeBtn.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.closeBtn.Location = new System.Drawing.Point(534, 381);
            this.closeBtn.Name = "closeBtn";
            this.closeBtn.Size = new System.Drawing.Size(116, 38);
            this.closeBtn.TabIndex = 2;
            this.closeBtn.Text = "Bağla";
            this.closeBtn.UseVisualStyleBackColor = true;
            this.closeBtn.Click += new System.EventHandler(this.closeBtn_Click);
            // 
            // confirmBtn
            // 
            this.confirmBtn.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.confirmBtn.Location = new System.Drawing.Point(669, 381);
            this.confirmBtn.Name = "confirmBtn";
            this.confirmBtn.Size = new System.Drawing.Size(116, 38);
            this.confirmBtn.TabIndex = 3;
            this.confirmBtn.Text = "Təsdiq et";
            this.confirmBtn.UseVisualStyleBackColor = true;
            this.confirmBtn.Click += new System.EventHandler(this.confirmBtn_Click);
            // 
            // fullnameTxtBox
            // 
            this.fullnameTxtBox.Location = new System.Drawing.Point(133, 25);
            this.fullnameTxtBox.Name = "fullnameTxtBox";
            this.fullnameTxtBox.Size = new System.Drawing.Size(382, 38);
            this.fullnameTxtBox.TabIndex = 4;
            // 
            // numberTxtBox
            // 
            this.numberTxtBox.Location = new System.Drawing.Point(559, 82);
            this.numberTxtBox.Name = "numberTxtBox";
            this.numberTxtBox.Size = new System.Drawing.Size(226, 38);
            this.numberTxtBox.TabIndex = 6;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label2.Location = new System.Drawing.Point(390, 92);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(163, 25);
            this.label2.TabIndex = 5;
            this.label2.Text = "Əlaqə nömrəsi:";
            // 
            // maleRadioBtn
            // 
            this.maleRadioBtn.AutoSize = true;
            this.maleRadioBtn.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.maleRadioBtn.Location = new System.Drawing.Point(614, 29);
            this.maleRadioBtn.Name = "maleRadioBtn";
            this.maleRadioBtn.Size = new System.Drawing.Size(70, 29);
            this.maleRadioBtn.TabIndex = 9;
            this.maleRadioBtn.TabStop = true;
            this.maleRadioBtn.Text = "Kişi";
            this.maleRadioBtn.UseVisualStyleBackColor = true;
            // 
            // femaleRadioBtn
            // 
            this.femaleRadioBtn.AutoSize = true;
            this.femaleRadioBtn.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.femaleRadioBtn.Location = new System.Drawing.Point(690, 30);
            this.femaleRadioBtn.Name = "femaleRadioBtn";
            this.femaleRadioBtn.Size = new System.Drawing.Size(95, 29);
            this.femaleRadioBtn.TabIndex = 10;
            this.femaleRadioBtn.TabStop = true;
            this.femaleRadioBtn.Text = "Qadın";
            this.femaleRadioBtn.UseVisualStyleBackColor = true;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label4.Location = new System.Drawing.Point(539, 30);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(69, 25);
            this.label4.TabIndex = 11;
            this.label4.Text = "Cinsi:";
            // 
            // bDayDateTimePicker
            // 
            this.bDayDateTimePicker.Format = System.Windows.Forms.DateTimePickerFormat.Short;
            this.bDayDateTimePicker.Location = new System.Drawing.Point(167, 82);
            this.bDayDateTimePicker.MaxDate = new System.DateTime(2022, 12, 20, 0, 0, 0, 0);
            this.bDayDateTimePicker.Name = "bDayDateTimePicker";
            this.bDayDateTimePicker.Size = new System.Drawing.Size(195, 38);
            this.bDayDateTimePicker.TabIndex = 13;
            this.bDayDateTimePicker.Value = new System.DateTime(2022, 12, 20, 0, 0, 0, 0);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label3.Location = new System.Drawing.Point(11, 95);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(150, 25);
            this.label3.TabIndex = 12;
            this.label3.Text = "Doğum tarixi:";
            // 
            // admitDateTimePicker
            // 
            this.admitDateTimePicker.Location = new System.Drawing.Point(155, 148);
            this.admitDateTimePicker.MinDate = new System.DateTime(2022, 12, 20, 0, 0, 0, 0);
            this.admitDateTimePicker.Name = "admitDateTimePicker";
            this.admitDateTimePicker.Size = new System.Drawing.Size(395, 38);
            this.admitDateTimePicker.TabIndex = 15;
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label5.Location = new System.Drawing.Point(12, 148);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(137, 25);
            this.label5.TabIndex = 14;
            this.label5.Text = "Qəbul tarixi:";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label6.Location = new System.Drawing.Point(13, 210);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(136, 25);
            this.label6.TabIndex = 16;
            this.label6.Text = "Tibbi şöbəsi:";
            // 
            // medicalDepartmentComboBox
            // 
            this.medicalDepartmentComboBox.AutoCompleteMode = System.Windows.Forms.AutoCompleteMode.SuggestAppend;
            this.medicalDepartmentComboBox.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.ListItems;
            this.medicalDepartmentComboBox.ForeColor = System.Drawing.SystemColors.WindowText;
            this.medicalDepartmentComboBox.FormattingEnabled = true;
            this.medicalDepartmentComboBox.Items.AddRange(new object[] {
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
            this.medicalDepartmentComboBox.Location = new System.Drawing.Point(155, 201);
            this.medicalDepartmentComboBox.Name = "medicalDepartmentComboBox";
            this.medicalDepartmentComboBox.Size = new System.Drawing.Size(630, 39);
            this.medicalDepartmentComboBox.Sorted = true;
            this.medicalDepartmentComboBox.TabIndex = 17;
            // 
            // noteTxtBox
            // 
            this.noteTxtBox.Location = new System.Drawing.Point(115, 257);
            this.noteTxtBox.Multiline = true;
            this.noteTxtBox.Name = "noteTxtBox";
            this.noteTxtBox.Size = new System.Drawing.Size(670, 97);
            this.noteTxtBox.TabIndex = 19;
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Font = new System.Drawing.Font("Times New Roman", 13.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.label7.Location = new System.Drawing.Point(19, 260);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(73, 25);
            this.label7.TabIndex = 18;
            this.label7.Text = "Qeyd:";
            // 
            // Form3
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(16F, 31F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(11)))), ((int)(((byte)(206)))), ((int)(((byte)(175)))));
            this.ClientSize = new System.Drawing.Size(807, 437);
            this.Controls.Add(this.noteTxtBox);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.medicalDepartmentComboBox);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.admitDateTimePicker);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.bDayDateTimePicker);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.femaleRadioBtn);
            this.Controls.Add(this.maleRadioBtn);
            this.Controls.Add(this.numberTxtBox);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.fullnameTxtBox);
            this.Controls.Add(this.confirmBtn);
            this.Controls.Add(this.closeBtn);
            this.Controls.Add(this.label1);
            this.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(162)));
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Margin = new System.Windows.Forms.Padding(6);
            this.MaximizeBox = false;
            this.Name = "Form3";
            this.Text = "QEYDİYYAT";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button closeBtn;
        private System.Windows.Forms.Button confirmBtn;
        private System.Windows.Forms.TextBox fullnameTxtBox;
        private System.Windows.Forms.TextBox numberTxtBox;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.RadioButton maleRadioBtn;
        private System.Windows.Forms.RadioButton femaleRadioBtn;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.DateTimePicker bDayDateTimePicker;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.DateTimePicker admitDateTimePicker;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.ComboBox medicalDepartmentComboBox;
        private System.Windows.Forms.TextBox noteTxtBox;
        private System.Windows.Forms.Label label7;
    }
}