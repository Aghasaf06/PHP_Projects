using HospitalApp.Concrets;
using HospitalApp.Entities;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Runtime.Remoting.Messaging;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace HospitalApp
{
    public partial class Form3 : Form
    {

        public Form3()
        {
            InitializeComponent();
        }
        

        private void closeBtn_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void confirmBtn_Click(object sender, EventArgs e)
        {
            
            if (fullnameTxtBox.Text != "" && numberTxtBox.Text != "" && medicalDepartmentComboBox.Text != "" && noteTxtBox.Text != "" && medicalDepartmentComboBox.SelectedText != null && maleRadioBtn.Checked==true || femaleRadioBtn.Checked == true)
            {
                PatientsEntityClass pa = new PatientsEntityClass();
                pa.nameSurname = fullnameTxtBox.Text;
                pa.phoneNumber = numberTxtBox.Text;
                pa.gender = (maleRadioBtn.Checked) ? "K" : (femaleRadioBtn.Checked) ? "Q" : "";
                pa.birthday = bDayDateTimePicker.Value;
                pa.medDepartment = medicalDepartmentComboBox.Text.ToString();
                pa.admitDatetime = admitDateTimePicker.Value;
                pa.registerDate = DateTime.Now;
                pa.note = noteTxtBox.Text;
                RegistrationClass r = new RegistrationClass();
                r.register(pa);
                MessageBox.Show("Qeydiyyat tamamlandı!");
                clean_data();
            }
            else
                MessageBox.Show("Xahiş olunur bütün məlumatları daxil edin!");
        }

        public void clean_data()
        {
            fullnameTxtBox.Text = "";
            numberTxtBox.Text = "";
            maleRadioBtn.Checked = false;
            femaleRadioBtn.Checked = false;
            medicalDepartmentComboBox.Text = "";
            noteTxtBox.Text = "";
            bDayDateTimePicker.Value = bDayDateTimePicker.MaxDate;
            admitDateTimePicker.Value = admitDateTimePicker.MinDate;

        }
    }
}
