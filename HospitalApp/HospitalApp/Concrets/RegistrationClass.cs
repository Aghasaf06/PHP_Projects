using HospitalApp.Abstracts;
using HospitalApp.Entities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HospitalApp.Concrets
{
    public class RegistrationClass : MainRepo<PatientsEntityClass>, RegistrationInterface
    {
        public void register(PatientsEntityClass p)
        {
            Hospital1Entities h = new Hospital1Entities();
            Patients pa = new Patients();
            pa.nameSurname = p.nameSurname;
            pa.phoneNumber = p.phoneNumber;
            pa.gender = p.gender;
            pa.birthday = p.birthday;
            pa.medDepartment = p.medDepartment;
            pa.admitDatetime = p.admitDatetime;
            pa.registerDate = p.registerDate;
            pa.note = p.note;

            h.Patients.Add(pa);
            h.SaveChanges();
        }
    }
}
