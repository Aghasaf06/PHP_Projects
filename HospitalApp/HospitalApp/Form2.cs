using HospitalApp.Concrets;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace HospitalApp
{
    public partial class Form2 : Form
    {
        int id;
        public Form2()
        {
            InitializeComponent();
        }
        Hospital1Entities hospital1Entities = new Hospital1Entities();

        private void newBtn_Click(object sender, EventArgs e)
        {
            Form3 form3 = new Form3();
            form3.ShowDialog();
        }

        private void Form2_Activated(object sender, EventArgs e)
        {
            ShowRegistredClass s = new ShowRegistredClass();

            dataGridView1.DataSource = s.Show();
            deleteBtn.Enabled = false;
        }

        private void dataGridView1_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            id = Convert.ToInt32(dataGridView1.CurrentRow.Cells[0].Value);
            deleteBtn.Enabled = true;
        }

        private void deleteBtn_Click_1(object sender, EventArgs e)
        {
            var pat = hospital1Entities.Patients.Find(id);
            hospital1Entities.Patients.Remove(pat);
            hospital1Entities.SaveChanges();
            MessageBox.Show("Silindi!");
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'hospital1DataSet.Patients' table. You can move, or remove it, as needed.
            this.patientsTableAdapter.Fill(this.hospital1DataSet.Patients);
        }

        private void searchAndUpdateBtn_Click(object sender, EventArgs e)
        {
            Form4 form4 = new Form4();
            form4.ShowDialog();
        }
    }
}
