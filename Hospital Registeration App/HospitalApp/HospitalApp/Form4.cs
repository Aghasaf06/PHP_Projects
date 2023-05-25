using HospitalApp.Concrets;
using HospitalApp.Entities;
using System;
using System.Data;
using System.Data.Entity.Migrations;
using System.Linq;
using System.Windows.Forms;



namespace HospitalApp
{
    public partial class Form4 : Form
    {
      dbClass db = new dbClass();

        public Form4()
        {
            InitializeComponent();
        }
        Hospital1Entities hospital1Entities = new Hospital1Entities();

        private void closeBtn2_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void deleteBtn_Click(object sender, EventArgs e)
        {
            Patients patients = hospital1Entities.Patients.Find(chooseComboBox.SelectedValue);
            hospital1Entities.Patients.Remove(patients);
            hospital1Entities.SaveChanges();
            MessageBox.Show("Silindi");
            clean_data();


            setDataToCombobox();

            deleteBtn.Enabled = false;
            searchBtn2.Enabled = false;
            secBtn.Enabled = true;
            chooseComboBox.Enabled = false;

        }

        private void Form4_Activated(object sender, EventArgs e)
        {
           //if(chooseComboBox.Text != "") { searchBtn2.Enabled = true; }
        }

        private void Form4_Load(object sender, EventArgs e)
        {
            setDataToCombobox();

            deleteBtn.Enabled = false;
            searchBtn2.Enabled = false;
            chooseComboBox.Enabled = false;

        }

        private void searchBtn2_Click(object sender, EventArgs e)
        {
            deleteBtn.Enabled = true;
            Patients patients = hospital1Entities.Patients.Find(chooseComboBox.SelectedValue);
            fullnameTxtBox2.Text = patients.nameSurname;
            numberTxtBox2.Text = patients.phoneNumber;
            bDayDateTimePicker2.Value = patients.birthday.Value;
            if (patients.gender == "K") { maleRadioBtn2.Checked = true; }
            else if (patients.gender == "Q") { femaleRadioBtn2.Checked = true; }
            admitDateTimePicker2.Value = patients.admitDatetime.Value;
            medicalDepartmentComboBox2.Text  = patients.medDepartment;
            medicalDepartmentComboBox2.Items.Add(patients.medDepartment.ToString());
            noteTxtBox2.Text = patients.note;
        }

        private void editBtn_Click(object sender, EventArgs e)
        {
            if (fullnameTxtBox2.Text != "" && numberTxtBox2.Text != "" && medicalDepartmentComboBox2.Text != "" && noteTxtBox2.Text != "" && medicalDepartmentComboBox2.SelectedText != null && maleRadioBtn2.Checked == true || femaleRadioBtn2.Checked == true)
            {
                Patients pa = hospital1Entities.Patients.Find(chooseComboBox.SelectedValue);
                pa.nameSurname = fullnameTxtBox2.Text;
                pa.phoneNumber = numberTxtBox2.Text;
                pa.gender = (maleRadioBtn2.Checked) ? "K" : (femaleRadioBtn2.Checked) ? "Q" : "";
                pa.birthday = bDayDateTimePicker2.Value;
                pa.medDepartment = medicalDepartmentComboBox2.Text.ToString();
                pa.admitDatetime = admitDateTimePicker2.Value;
                pa.registerDate = DateTime.Now;
                pa.note = noteTxtBox2.Text;
                hospital1Entities.Patients.AddOrUpdate(pa);
                hospital1Entities.SaveChanges();

                MessageBox.Show("Redaktə olundu!");
                clean_data();

                setDataToCombobox();

                deleteBtn.Enabled = false;
                searchBtn2.Enabled = false;
                secBtn.Enabled = true;
                chooseComboBox.Enabled = false; 
            }
            else
                MessageBox.Show("Xahiş olunur yenilənəcək məlumatların hamısını daxil edin");
        }



        private void secBtn_Click(object sender, EventArgs e)
        {
            chooseComboBox.Enabled = true;
            searchBtn2.Enabled = true;
            secBtn.Enabled = false;

        }


        public void setDataToCombobox()
        {
            Hospital1Entities hospital1Entities = new Hospital1Entities();
            chooseComboBox.DataSource = hospital1Entities.Patients.Where(x=>x.gender=="1").ToList();//db.Executedatareader("select * from Patients");
            chooseComboBox.DisplayMember = "nameSurname";
            chooseComboBox.Text = "";
            chooseComboBox.ValueMember = "id";
        }

        public void clean_data()
        {
            chooseComboBox.Text = "";
            fullnameTxtBox2.Text = "";
            numberTxtBox2.Text = "";
            maleRadioBtn2.Checked = false;
            femaleRadioBtn2.Checked = false;
            medicalDepartmentComboBox2.Text = "";
            noteTxtBox2.Text = "";
            bDayDateTimePicker2.Value = bDayDateTimePicker2.MaxDate;
            admitDateTimePicker2.Value = admitDateTimePicker2.MinDate;


        }
    }
}
