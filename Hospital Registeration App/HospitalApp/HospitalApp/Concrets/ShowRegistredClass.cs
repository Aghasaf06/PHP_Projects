using HospitalApp.Abstracts;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HospitalApp.Concrets
{
    public class ShowRegistredClass: ShowRegisteredInterface
    {
        public List<Patients> Show()
        {
            Hospital1Entities hospital1Entities = new Hospital1Entities();
            return hospital1Entities.Patients.ToList();
        }
    }
}
