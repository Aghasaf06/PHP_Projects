using HospitalApp.Entities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HospitalApp.Abstracts
{
    public interface RegistrationInterface
    {
        void register(PatientsEntityClass p);
    }
}
