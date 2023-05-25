using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HospitalApp
{
    internal class dbClass
    {

        const string conString = "Data Source=DESKTOP-2PQMAIJ\\SQLEXPRESS;Initial Catalog=Hospital1;Integrated Security=True";

        public DataTable Executedatareader(string sql)
        {
            SqlConnection sqlConnection = new SqlConnection();
            sqlConnection.ConnectionString = conString;
            sqlConnection.Open();
            SqlCommand sqlCommand = new SqlCommand(sql, sqlConnection);
            SqlDataReader sqlreader = sqlCommand.ExecuteReader();
            DataTable table = new DataTable();
            table.Load(sqlreader);
            sqlConnection.Close();
            sqlCommand.Dispose();
            return table;
        }

    }
}
