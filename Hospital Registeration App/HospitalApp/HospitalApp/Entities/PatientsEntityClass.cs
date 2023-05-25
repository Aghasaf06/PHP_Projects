using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HospitalApp.Entities
{
    public class PatientsEntityClass
    {
        public string nameSurname { get; set; }
        public string phoneNumber { get; set; }
        public string gender { get; set; }  
        public DateTime birthday { get; set; }
        public string medDepartment { get; set; }
        public DateTime admitDatetime { get; set; }
        public DateTime registerDate { get; set; }
        public string note { get; set; }

    }
}
